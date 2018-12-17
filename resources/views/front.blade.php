<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	{{-- <script src="/js/app.js"></script> --}}

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
  {{-- Copied From Admine Lte Script --}}
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>Forebase-1.0 | @yield('title')</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> --}}

    <!-- Styles -->
    {{-- <link href="{{ asset('css/appdefault.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<script src="{{asset('/js/app.js')}}" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>

	{{-- <h1>Welcome</h1> --}}

	{{-- <div class="container-fluid"> --}}
	{{-- <div class="container-fluid">

		<div class="row">
			<div class="col-md-6">
				<h2>hi</h2>
			</div>
			<div class="col-md-6">
				<h2>hi</h2>
			</div>
		</div>
		
	</div> --}}

{{-- justify-content-end --}}


<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Logo</a>

   <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Links -->
  <ul class="navbar-nav collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <li class="nav-item">
      <a class="nav-link" href="/">Home</a>
    </li>
    
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       Our Library
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Laravel</a>
        <a class="dropdown-item" href="#">JQuery</a>
        <a class="dropdown-item" href="#">Ubuntu</a>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="blogTemplate">Blog</a>
    </li>


  </ul>
</nav>

<div class="container-fluid" style="padding-left: 0px;padding-right: 0px;margin-top: -11px;">
	<div class="row" style="position: fixed">
	<img src="{{asset('/img/a.jpg')}}" class="img-thumbnail" alt="Cinque Terre" style="border: none;padding: 0px" >
		
	</div>
</div>


</body>
</html>