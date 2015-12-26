<html>
    <title>myFFCS-An initiative by GDG-VIT</title>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <!--Let browser know website is optimized for mobile-->
      <style type="text/css">
  
  li span {
  color: red; /* text color */
}
</style>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="UTF-8">
      <meta http-equiv="refresh" content="1 day">
      <meta name="description" content="VIT - FFCS Timetable. Create your timetable and experience the FFCS process before FFCS. Share it ">
      <meta name="keywords" content="VIT,FFCS, Timetable, VIT UNIVERSITY, GDG,GDG VIT, VELLORE, COURSE ALLOCATION">
      <meta name="distribution" content="web">
      <meta name="apple-mobile-web-app-capable" content="yes">
       <meta name="language" content="en-us">
       <meta name="distribution" content="Global" />
        <meta property="og:title" content="myFFCS- Create your timetable before FFCS">
    <meta property="og:site_name" content="myFFCS ">
    <meta property="og:url" content="https://www.myffcs.in">
    <meta property="og:description" content="VIT - FFCS Timetable. Create your timetable and experience the FFCS process before FFCS. Share it">
      <meta name="author" content="Ashwini Purohit, Vijay Nandwani">
    </head>

    <body>
<nav>
    <div class="nav-wrapper">
      <a href="http://www.myffcs.in" class="brand-logo center">myFFCS</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href={!!action('TimeTableController@about')!!}>About</a></li>
        <li><a href={!!action('Auth\AuthController@logout')!!}>Logout</a></li>
      </ul>
    </div>
  </nav>
        
<br>
<div class="row">
     @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li><span>{{ $error }}</span></li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('url' => 'submit', 'class' => 'col s12')) !!}
       <div class="row">
        <div class="input-field col s6">
          <input placeholder="Please enter course code" name = "courseCode" id="first_name" type="text" class="validate">
          <label for="first_name">Course code</label>
        </div>
       </div>
       
        <p>
        
        {!! Form::label('credits', 'Credits for this course: ') !!}
        <div class="input-field col s6">
        <select name = "credits" class="browser-default col s6">
        <option value="" disabled selected>Select Credits</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="0">LAB</option>
      </select></div>
        </p>
        <p>
        {!! Form::label('courseSlot', 'Please Select Slot: ') !!}
        <div class="input-field col s6">
        <select name = "courseSlot" class="browser-default col s6">
        <option value="" disabled selected>Choose Slot</option>
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="C1">C1</option>
        <option value="C2">C2</option>
        <option value="D1">D1</option>
        <option value="D2">D2</option>
        <option value="E1">E1</option>
        <option value="E2">E2</option>
        <option value="F1">F1</option>
        <option value="F2">F2</option>
        <option value="G1">G1</option>
        <option value="G2">G2</option>
        <option value="A1+TA1">A1+TA1</option>
        <option value="A2+TA2">A2+TA2</option>
        <option value="B2+TB2">B2+TB2</option>
        <option value="C1+TC1">C1+TC1</option>
        <option value="C2+TC2">C2+TC2</option>
        <option value="D1+TD1">D1+TD1</option>
        <option value="D2+TD2">D2+TD2</option>
        <option value="E1+TE1">E1+TE1</option>
        <option value="E2+TE2">E2+TE2</option>
        <option value="F1+TF1">F1+TF1</option>
        <option value="F2+TF2">F2+TF2</option>
        <option value="G1+TG1">G1+TG1</option>
        <option value="G2+TG2">G2+TG2</option>
        <option value="L1-L2">L1-L2</option>
        <option value="L3-L4">L3-L4</option>
        <option value="L5-L6">L5-L6</option>
        <option value="L7-L8">L7-L8</option>
        <option value="L9-L10">L9-L10</option>
        <option value="L11-L12">L11-L12</option>
        <option value="L13-L14">L13-L14</option>
        <option value="L19-L20">L19-L20</option>
        <option value="L21-L22">L21-L22</option>
        <option value="L23-L24">L23-L24</option>
        <option value="L25-L26">L25-L26</option>
        <option value="L27-L28">L27-L28</option>
        <option value="L29-L30">L29-L30</option>
        <option value="L31-L32">L31-L32</option>
        <option value="L33-L34">L33-L34</option>
        <option value="L35-L36">L35-L36</option>
        <option value="L37-L38">L37-L38</option>
        <option value="L39-L40">L39-L40</option>
        <option value="L41-L42">L41-L42</option>
        <option value="L43-L44">L43-L44</option>
        <option value="L45-L46">L45-L46</option>
        <option value="L47-L48">L47-L48</option>
        <option value="L49-L50">L49-L50</option>
        <option value="L51-L52">L51-L52</option>
        <option value="L53-L54">L53-L54</option>
        <option value="L55-L56">L55-L56</option>
        <option value="L57-L58">L57-L58</option>
        <option value="L59-L60">L59-L60</option>

      </select></div>
        </p>
        
       </div>
       <br>
       <div class = "center-align">
        <button type = "submit" class = "waves-effect waves-light btn center-align">Register</button>
        <a class="waves-effect waves-light btn">{!!$sum!!} Credits</a>
        </div>
    {!! Form::close() !!}
   

<a id="share" style="display:none" href="https://www.facebook.com/dialog/share?redirect_uri=http%3A%2F%2Ftimetable.cloudapp.net%2Fhome&app_id=481083698767151&display=popup&href={!! url('share', [$id]);!!}">Share on Facebook</a>
  <div id="target">
<table class = "highlight">
        <thead>
          <tr>
              <th class = "indigo lighten-5"  data-field="id">Days/Hours</th>
              <th class = "indigo lighten-5"  data-field="name">8-8:50</th>
              <th class = "indigo lighten-5"  data-field="price">9-9:50</th>
              <th class = "indigo lighten-5"  data-field="id">10-10:50</th>
              <th class = "indigo lighten-5"  data-field="name">11-11:50</th>
              <th class = "indigo lighten-5"  data-field="price">12-12:50</th>
              <th class = "indigo lighten-5"  data-field="id">12:40-1:30</th>
              <th class = "indigo lighten-5"  data-field="name">Lunch</th>
              <th class = "indigo lighten-5"  data-field="price">2-2:50</th>
              <th class = "indigo lighten-5"  data-field="id">3-3:50</th>
              <th class = "indigo lighten-5"  data-field="name">4-4:50</th>
              <th class = "indigo lighten-5"  data-field="price">5-5:50</th>
              <th class = "indigo lighten-5"  data-field="id">6-6:50</th>
              <th class = "indigo lighten-5"  data-field="name">6:40-7:30</th>

          </tr>
        </thead>

        <tbody>
          <tr>
          
            <td  class = "indigo lighten-5">Monday</td>
            <td id= "1">A1/L1</td>
            <td id= "6">F1/L2</td>
            <td id= "11">C1/L3</td>
            <td id= "16">E1/L4</td>
            <td id= "21">TD1/L5</td>
            <td id= "26">L6</td>
            <td class = "blue lighten-5">L</td>
            <td id= "31">A2/L31</td>
            <td id= "36">F2/L32</td>
            <td id= "41">C2/L33</td>
            <td id= "46">E2/L34</td>
            <td id= "51">TD2/L35</td>
            <td id= "56">L36</td>
            
         
          </tr>
          <tr>
          <td id = "5" class = "indigo lighten-5">Tuesday</td> 
            <td id= "2">B1/L7</td>
            <td id= "7">G1/L8</td>
            <td id= "12" >D1/L9</td>
            <td id= "17">TA1/L10</td>
            <td id= "22">TF1/L11</td>
            <td id= "27">L12</td>
            <td class = "blue lighten-5">U</td>
            <td id= "32">B2/L37</td>
            <td id= "37">G2/L38</td>
            <td id= "42">D2/L39</td>
            <td id= "47">TA2/L40</td>
            <td id= "52">TF2/L41</td>
            <td id= "57">L42</td>
          </tr>
          <tr>
            <td class = "indigo lighten-5">Wednesday</td>
            <td id= "3">C1/L13</td>
            <td id= "8">F1/L14</td>
            <td id= "13">E1/L15</td>
            <td id= "18"></td>
            <td id= "23"></td>
            <td id= "28"></td>
            <td class = "blue lighten-5">N</td>
            <td id= "33">C2/L43</td>
            <td id= "38">F2/L44</td>
            <td id= "43">E2/L45</td>
            <td id= "48">TB2/L46</td>
            <td id= "53">TG2/L47</td>
            <td id= "58">L48</td>
          </tr>

          <tr>
            <td class = "indigo lighten-5">Thursday</td>
            <td id= "4">D1/L19</td>
            <td id= "9">A1/L20</td>
            <td id= "14">F1/L21</td>
            <td id= "19">C1/L22</td>
            <td id= "24">TE1/L23</td>
            <td id= "29">L24</td>
            <td class = "blue lighten-5">C</td>
            <td id= "34">D2/L49</td>
            <td id= "39">A2/L50</td>
            <td id= "44">F2/L51</td>
            <td id= "49">C2/L52</td>
            <td id= "54">TE2/L53</td>
            <td id= "59">L54</td>
          </tr>

          <tr>
            <td class = "indigo lighten-5">Friday</td>
            <td id= "5">E1/L25</td>
            <td id= "10">B1/L26</td>
            <td id= "15">G1/L27</td>
            <td id= "20">D1/L28</td>
            <td id= "25">TC1/L29</td>
            <td id= "30">L30</td>
            <td class = "blue lighten-5">H</td>
            <td id= "35">E2/L55</td>
            <td id= "40">B2/L56</td>
            <td id= "45">G2/L57</td>
            <td id= "50">D2/L58</td>
            <td id= "55">TC2/L59</td>
            <td id= "60">L60</td>
          </tr>
        </tbody>
      </table>
      

      </div>
        <form method="POST" enctype="multipart/form-data" action="save" id="myForm">
                    <input type="hidden" name="img_val" id="img_val" value="" />
                </form>
      <div class="fixed-action-btn horizontal click-to-toggle" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="large mdi-navigation-menu"></i>
    </a>
    <ul>
      <li><a class="btn-floating green" onclick="capture();"><i class="fa fa-download"></i></a></li>
      <li><a class="btn-floating blue" onclick="share();"><i class="fa fa-facebook"></i></a></li>
    </ul>
  </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
       <script type="text/javascript" src="js/html2canvas.js"></script>
        <script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $.get( "tableinfo", {'_token': $('input[name=_token]').val() },function( data ) {
                   $.each($.parseJSON(data), function( index, value ) {
                      $('#'+value[1]).addClass('green');
                      $('#'+value[1]).prepend(value[0]+"(");
                      $('#'+value[1]).append(")");
                    });
                });
            });
            </script>
            <script type="text/javascript">
                function capture() {
                    $('#target').html2canvas({
                        onrendered: function (canvas) {
                            //Set hidden field's value to image data (base-64 string)
                            $('#img_val').val(canvas.toDataURL("image/png"));
                            //Submit the form manually
                            document.getElementById("myForm").submit();
                        }
                    });
                }
            </script>

            <script type="text/javascript">
                function share() {
                    $('#share')[0].click();
                }
            </script>
            <script type="text/javascript" src="{{ asset('js/google.js') }}"></script>
    </body>
  </html>
