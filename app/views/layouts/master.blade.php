<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="/main.css">

</head>
<body>
	<nav class="navbar navbar-default navbar-inverse navbar-fixed-top ">
		<div class="navbar-wrapper">
			<button type="button" class="navbar-toggle" data-toggle="collapse" 
			data-target="#myNavbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Johnathan Christopherson</a>
		</div>

		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li class="">
					<a class="page-scroll" href="#about">About</a>
				</li>
				<li class="">
					<a class="page-scroll" href="/resume">Resume</a>
				</li>
				<li class="">
					<a class="page-scroll" href="#portfolio">Portfolio</a>
				</li>
				<li class="">
					<a class="page-scroll" href="#contact">Contact</a>
				</li>
			</ul>
		</div>
	</nav>

	@if (Session::has('successMessage'))
		<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif

		@if (Session::has('errorMessage'))
			<div class="alert alert-danger" role="alert">{{{ Session::get('errorMessage') }}}</div>
		@endif


		@foreach ($errors->all() as $error)
			<div class="alert alert-danger" role="alert"><li>{{{ $error }}}</li></div>
		@endforeach

   <div class="container"> @yield('content') </div>

    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>


