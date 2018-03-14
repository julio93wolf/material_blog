<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	
	<!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

	<!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="{{ asset('css/main.css') }}"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
	<div id="app">
		<div class="navbar-fixed">
			<ul id="dropdown_session" class="dropdown-content">
			  <li>
          <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST">
              {{ csrf_field() }}
          </form>
			  </li>
			</ul>
			<nav>
		    <div class="nav-wrapper blue darken-4">
		      <a href="#" class="brand-logo">Logo</a>
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
		        @guest
		            <li><a href="{{ route('login') }}">Login</a></li>
		            <li><a href="{{ route('register') }}">Register</a></li>
		            <li><a class="dropdown-button" href="#!" data-activates="dropdown_session"> {{-- Auth::user()->name --}} Julio <i class="material-icons right">arrow_drop_down</i></a></li>
		        @else
      					
		        @endguest
		      </ul>
		    </div>
		  </nav>
	  </div>
	  @yield('content')
	</div>
	<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>