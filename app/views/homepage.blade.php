<!DOCTYPE html>
<html>
<head>
	<title>Bo Wilkins for President</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/bowilkins.css">
</head>
<body>
<div class="container-fluid">
	<div class="row landing1">
		<div class="col-lg-12">
					<span id="thebanner" class="landingquote"></span>
			{{-- <div class="landingback">
			</div> --}}
			{{-- <div class="divider1"></div>
			<div class="divider2"></div> --}}
		</div>
	</div>
	<div class="row landing2 text-center">
		<div class="col-lg-12">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				Contact Bo
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Continue to Site</div>
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
}
</script>
</body>
</html>