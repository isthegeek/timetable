<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
      <script type="text/javascript" src="{{ asset('js/google.js') }}"></script>
    </body>
  </html>