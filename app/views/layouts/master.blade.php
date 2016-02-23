<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="img/png" href="/img/icon.png">
	<title>Bo Wilkins for President</title>
	<link rel="stylesheet" type="text/css" href="/css/bowilkins.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
</head>
	@yield('top-script')
<body>
	<div class="container-fluid">
		<div class="row title">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					{{-- <a class="navlink" href="{{{action('HomeController@homepage')}}}"><span class="bo1">B</span><span class="bo2">o </span><span class="wilkins">Wilkins</span></a> --}}
				</div>
				<div class="mottocontainer col-lg-6 col-lg-offset-2 col-md-6 col-md-offset-2 col-sm-hidden hidden-phone">
					{{-- <span class="motto">Hungry for Freedom. Petted by the People.</span> --}}
				</div>
				{{-- </div>
				<div class="row title"> --}}
			</div>
		</div>
		<div class="navbar row">
			<div class="col-lg-12 text-center">
				<div class="navarea col-lg-3">
					<a class="navlink" href="{{{action('HomeController@aboutme')}}}">About Me</a>
				</div>
				<div class="navarea col-lg-3">
					<a class="navlink" href="{{{action('HomeController@issues')}}}">On the Issues</a>
				</div>
				<div class="navarea col-lg-3">
					<a class="navlink" href="{{{action('HomeController@media')}}}">Bo in the Media</a>
				</div>
				<div class="navarea col-lg-3">
					<a class="navlink" href="{{{action('HomeController@contact')}}}">Contact Me</a>
				</div>
			</div>
		</div>
	@yield('content')
	</div>

<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.js"></script>
@yield('bottom-script')
</body>
</html>