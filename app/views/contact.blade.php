@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="textsection text-center">
			<div class="contact col-lg-12">
				<div class="col-lg-6 col-lg-offset-3">
					<form class="form-horizontal" method="POST" action="https://www.elformo.com/forms/93b2c18b-9ccd-45df-9d59-f1a6368b30e9">
						<div class="form-group">
							<label class="control-label" for "name">Your Name</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" for "email">Your Email</label>
							<input type="text" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" for "subject">Subject</label>
							<input type="text" name="subject" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" for "message">Message</label>
							<textarea class="form-control" name="message"></textarea>
						</div>
						<button class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop