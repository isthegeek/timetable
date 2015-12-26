<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TimeTableSlot;
use App\userTimeSlot;
use App\User;



class TimeTableController extends Controller
{
	private $isClashing = 0;
	private $creditsMore = 0;
	private $clashesWith = NULL;
    public function submitResponse(Request $request){
        
		$validator = Validator::make($request->all(), ['courseCode'=>'required',
                                   'credits'=>'required|numeric',
                                   'courseSlot'=>'required'
        ]);
		$user = \Auth::user();
		$existingCredits = 0;
		$slotsToBeAddedtemp = str_replace("+","-",$request->input('courseSlot') );
		$slotsToBeAddedtemp = explode("-",$slotsToBeAddedtemp );
		if(count($slotsToBeAddedtemp) == 2){
			$slotsToBeAdded = TimeTableSlot::where('name', $slotsToBeAddedtemp[0])->orWhere('name', $slotsToBeAddedtemp[1])->get();
		}else{
			$slotsToBeAdded = TimeTableSlot::where('name', $slotsToBeAddedtemp[0])->get();
		}
		$existingSlots = $user->usertimeslots;
		$this->isClashing = 0;
		$this->creditsMore = 0;
		//All the time slots which the user currently has
		$existingSlotsTiming = collect();
		foreach($existingSlots as $onecoursetimeslots){
			$existingCredits += $onecoursetimeslots->credits;
			foreach($onecoursetimeslots->timeslots as $onecoursetimeslot){
				$temp=array('name'=>$onecoursetimeslot->name, 'start'=>$onecoursetimeslot->start, 'end'=>$onecoursetimeslot->end,'day'=>$onecoursetimeslot->day);
				$existingSlotsTiming->push($temp);
			}
		}
		foreach($slotsToBeAdded as $oneTimeSlotWhichWouldBeAdded){
			foreach ($existingSlotsTiming as $existingSlotTiming) {
				if($oneTimeSlotWhichWouldBeAdded->day == $existingSlotTiming['day']){
					if($oneTimeSlotWhichWouldBeAdded->start >= $existingSlotTiming['start'] and $oneTimeSlotWhichWouldBeAdded->end <= $existingSlotTiming['end']){
						$this->isClashing = 1;
						$this->clashesWith = $existingSlotTiming['name'];
						break;
					}
				}
			}
		}
		if($existingCredits+$request->input('credits')>27){
			$this->creditsMore = 1;
		}
		$validator->after(function($validator) {
		    if ($this->isClashing) {
		        $validator->errors()->add('courseSlot', 'Time slot clashes with '.$this->clashesWith);
		    }
		    if ($this->creditsMore) {
		        $validator->errors()->add('credits', 'Total Credits exceed 27');
		    }
		});

		if ($validator->fails()) {
            return redirect('/home')
                        ->withErrors($validator)
                        ->withInput();
        }
        $credits = $request->input('credits');
        foreach ($slotsToBeAddedtemp as $value) {
        	$userTimeSlot = new userTimeSlot;
        $userTimeSlot->userid = $user->id;
        $userTimeSlot->credits = $credits;
        $credits = 0;
        $userTimeSlot->slotid = $value;
        $userTimeSlot->courseCode = $request->input('courseCode');
		$userTimeSlot->save();
        }
        
		 return redirect('home');
    }

    public function home(){
        $user = \Auth::user();
        $sum = $user->usertimeslots->sum('credits');
        $id = $user->id;
        return view('home', ['id' => $id, 'sum'=>$sum]);
    }

    public function about(){
    	return view('about');
    }

    public function share($id){
        return view('share', ['id' => $id]);
    }

    public function test(){
    	$user = \Auth::user();
    	$existingSlots = $user->usertimeslots;
		$existingSlotsTiming = collect();
		foreach($existingSlots as $onecoursetimeslots){
			foreach($onecoursetimeslots->timeslots as $onecoursetimeslot){
				dd($onecoursetimeslot->start);
				$temp=array('start'=>$onecoursetimeslot->start, 'end'=>$onecoursetimeslot->end,'day'=>$onecoursetimeslot->day);
				$existingSlotsTiming->push($temp);
			}
		}
		dd($existingSlotsTiming);
    }

    public function tableinfo(){
    	$user=\Auth::user();
    	$timeslotsaray = array();
    	$existingSlots = $user->usertimeslots;
    	foreach($existingSlots as $existingSlot){
    		$courseCode = $existingSlot->courseCode;
    		foreach($existingSlot->timeslots as $timeslot){
    			$temp = array();
    			array_push($temp, $courseCode);
    			array_push($temp, $timeslot->htmlid);
    			array_push($timeslotsaray, $temp);
    		}
    	}
    	return json_encode($timeslotsaray);
    }

    public function sharetableinfo(Request $request){
    	$user=User::where('id', $request->get('id'))->get();
    	$timeslotsaray = array();
    	$existingSlots = $user[0]->usertimeslots;
    	foreach($existingSlots as $existingSlot){
    		$courseCode = $existingSlot->courseCode;
    		foreach($existingSlot->timeslots as $timeslot){
    			$temp = array();
    			array_push($temp, $courseCode);
    			array_push($temp, $timeslot->htmlid);
    			array_push($timeslotsaray, $temp);
    		}
    	}
    	return json_encode($timeslotsaray);
    }

    public function save(Request $request){
		$filteredData=substr($request->input('img_val'), strpos($request->input('img_val'), ",")+1);
 		$unencodedData=base64_decode($filteredData);
 		$name = time();
 		file_put_contents($name.'.png', $unencodedData);
 		return response()->download($name.'.png', 'Timetable.png');
    }
}
