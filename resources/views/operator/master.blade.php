<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="/css/app.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="/mahasiswa/login">Mahasiswa</a></li>
        <li><a href="/staff/login">Staff</a></li>
      </ul>
      <nav>
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">Logo</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            @if(!Auth::guard('staff')->check() && !Auth::guard('mahasiswa')->check())
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Login<i class="material-icons right">arrow_drop_down</i></a></li>
            @else
              <li><a href="/logout">Logout</a></li>
            @endif
          </ul>
        </div>
      </nav>
      <div class="container" style="margin-top: 20px">
      	@yield('content')  
  	  </div>
            

      <!--JavaScript at end of body for optimized loading-->
      <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    
      <script src="/js/app.js"></script>
      <script>
      $(".dropdown-trigger").dropdown();
      </script>
  </html>
        