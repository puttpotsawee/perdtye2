@extends('perdtye/header')

@section('content')
<!-- report -->
<!--REPORT-->
<div class="container">
	<!-- FORM -->
	<div class="col-sm-2">
	</div>
	<div class="col-sm-8">
		<div class="well-shadow" style="margin-top:60px">
			<form class="form-horizontal">


				<fieldset>
					<legend>Report Good</legend>


					<div class="form-group">
						<label for="inputSubject" class="col-lg-3 control-label">Subject :</label>
						<div class="col-lg-6">
							<input type="text" class="form-control" id="inputSubject" placeholder="Subject">
						</div>
					</div>

					<div class="form-group">
						<label for="inputAbout" class="col-lg-3 control-label">About :</label>
						<div class="col-lg-6">
							<h4> Apple iPhone 6 </h4>
						</div>
					</div>


					<div class="form-group">
						<label for="textArea" class="col-lg-3 control-label" >Descriptions :</label>
						<div class="col-lg-6">
							<textarea class="form-control" rows="3" id="textArea" style="height:200px; width:100%;"></textarea>

						</div>
					</div>


					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-3" row="3" style="margin-top:25px;">
							<div class="col-lg-7">
								<button class="btn btn-default">Cancel</button>
								<button type="submit" class="btn btn-primary" style="float:right;">Submit</button>
							</div>
						</div>
					</div>
				</fieldset>
			</form>
	</div>
	<div class="col-sm-2">
	</div>
</div>
</div>
<!-- report -->
@stop
@section('footer')
<nav class="navbar navbar-default navbar-bottom2" role="navigation">
	@stop