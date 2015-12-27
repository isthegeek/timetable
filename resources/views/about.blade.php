<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}" media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
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
              <li><a href="https://github.com/rishiraj824">Rishi Raj</a></li>
              
            </ul>
            </div>
            
          </div>
        </div>
      </div>
        

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
      <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71735575-1', 'auto');
  ga('send', 'pageview');

</script>

    </body>
  </html>
        
