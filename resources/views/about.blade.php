<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}" media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>


<nav>
    <div class="nav-wrapper">
      <a href="myffcs.in" class="brand-logo center">myFFCS</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href={!!action('TimeTableController@about')!!}>About</a></li>
        
      </ul>
    </div>
  </nav>

    <div class="row">
        <div class="col s12 ">
          <div class="card white">
            <div class="card-content black-text">
              <span class="card-title">About</span>
              <p>An initiative taken by <b><a href="http://www.gdgvitvellore.com">GDG-VIT</a></b> to ease the process of FFCS and take the experience of FFCS before.</p>
              <p>Features of myFFCS</p>
              <ul>
              <li>You can add subjects slot-wise</li>
              <li>Check if time-slot clashes with other registered courses.</li>
              <li>Share your time-table with others.</li>
              <li>Manage your timetable anytime.</li>
            </ul>
            <p>The complete FFCS system is based upon the new circular by VIT UNIVERSITY (can be downloaded <a href="https://academics.vit.ac.in/spotlight_file.asp?slcode=2015000491">here</a>) .</p>
            <p>If any changes made in the slots, <b><a href="http://www.gdgvitvellore.com">GDG-VIT</a></b> is not responsible for that.</p>
            <br>
            <p>Contributors: </p>
            <ul>
              <li><a href="https://github.com/ashwini0529">Ashwini Purohit</a></li>
              <li><a href="https://github.com/isthegeek">Vijay Nandwani</a></li>
            </ul>
            </div>
            
          </div>
        </div>
      </div>
        

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    </body>
  </html>
        