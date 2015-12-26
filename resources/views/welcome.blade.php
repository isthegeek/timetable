<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

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
      <a href="#" class="brand-logo center">myFFCS</a>
    </div>
  </nav>

<div class="grid-example col s12 l12 m12 center-align"><span class="flow-text">GDG VIT brings you myFFCS</span>
</div>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
       

      <div class="row ">
        <div class="col s12 m6">
          <div class="card white">
            <div class="card-content black-text">
              <span class="card-title">Register</span>
              <div class="row">
    <form class="col s12" role="form" method="POST" action="{{ url('/register') }}">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Eg. (14BCE0000)" name = "regno" id="first_name" type="text" class="validate">
          <label for="first_name">Registration Number</label>
        </div>

        <div class="input-field col s6">
          <input placeholder="Please enter your password" name = "password" id="first_name" type="password" class="validate">
          <label for="first_name">Password</label>
        </div>
            <div class="card-action">
              <a href="#" onclick="this.parentNode.parentNode.parentNode.submit()">Register here</a>
            </div>
        </div>
    </form>
  
            </div>
            
          </div>
        </div>
      </div>

        <div class="row ">
        <div class="col s12 m6">
          <div class="card white">
            <div class="card-content black-text">
              <span class="card-title">Login</span>
              <div class="row">
                    <form class="col s12" role="form" method="POST" action="{{ url('/login') }}">
                  <div class="row">
                    <div class="input-field col s6">
                      <input placeholder="Eg. (14BCE0000)" name = "regno" id="first_name" type="text" class="validate">
                      <label for="first_name">Registration Number</label>
                    </div>

                    <div class="input-field col s6">
                      <input placeholder="Please enter your password" name = "password" id="first_name" type="password" class="validate">
                      <label for="first_name">Password</label>
                    </div>
                    <div class="card-action">
                          <a href="#" onclick="this.parentNode.parentNode.parentNode.submit()" >Login</a>
                    </div>
                     </div>
                     </form>
             
            </div>
            
          </div>
        </div>
      </div>
            
        

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71770061-1', 'auto');
  ga('send', 'pageview');

</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- GDG VIT FFCS -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1192143571859738"
     data-ad-slot="8088037006"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </body>
  </html>
