<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="img/png" href="/img/icon.png">
	<title>Bo Wilkins for President</title>
	<link rel="stylesheet" type="text/css" href="/css/bowilkins.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
</head>
	@yield('top-script')
<body>
	<div class="container-fluid">
		<div class="row text-center title">
			<a class="navlink" href="{{{action('HomeController@homepage')}}}"><h1>Bo Wilkins for President</h1></a>
		</div>
		<div class="row text-center title">
			<h3>Hungry for Freedom. Petted by the People.</h3>
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