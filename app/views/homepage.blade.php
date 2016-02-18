@extends('layouts.master')
@section('content')
	<div class="row textsection">
		<div class="col-lg-12">
			<div class="homepagegreeter text-center">
				<h1>Welcome to the official Bo Wilkins for President webpage!</h4>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="/img/bo1.png">
			      <div class="carousel-caption">
			        Just picture this face leading the country
			      </div>
			    </div>
			    <div class="item">
			      <img src="/img/bo2.png">
			      <div class="carousel-caption">
			        I carry a big stick!
			      </div>
			    </div>
			    <div class="item">
			    	<img src="/img/bo3.png">
			    	<div class="carousel-caption">
			    		Never resting until the job is done...or until after dinnertime.
			    	</div>
			    </div>
			    ...
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>
@stop