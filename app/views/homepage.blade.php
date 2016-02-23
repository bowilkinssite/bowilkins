<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bo Wilkins for President</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/bowilkins.css">
</head>
<body>
<div class="container-fluid">
	<div class="row landing1">
		<div class="col-lg-12 hidden-sm hidden-xs">
					<span id="thebanner" class="landingquote"></span>
			{{-- <div class="landingback">
			</div> --}}
			{{-- <div class="divider1"></div>
			<div class="divider2"></div> --}}
		</div>
	</div>
	<div id="thefooter" class="row landing2 text-center">
		<div class="col-lg-12">
			<a href="{{{action('HomeController@contact')}}}"><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				Contact Bo
			</div></a>
			<a href="{{{action('HomeController@aboutme')}}}"><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Continue to Site</div></a>
		</div>
	</div>
</div>
<script src="/js/jquery.js"></script>
<script type="text/javascript">
var height = window.screen.height;
var width = window.screen.width;
console.log("Height: " + height);
console.log("Width: " + width);
if(height > 800 && width > 1280) {
	$("#thebanner").attr('class', 'biglandingquote');
	$("#thefooter").attr('class', 'row biglanding2 text-center');
}
if( height <= 600) {
	$("#thebanner").attr('class', 'smalllandingquote');
	$("#thefooter").attr('class', 'row smalllanding2 text-center');
}
</script>
</body>
</html>