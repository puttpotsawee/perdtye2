@extends('perdtye/header')

@section('content')
<!-- auction -->
<div class="container">
	<div class="row clearfix" style="margin-top:30px;">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-2 column">
				</div>
				<div class="col-md-8 column">
					<legend>iPhone6 64gb Gold</legend>
					<div class="row clearfix" style="margin-top:30px;">
						<div class="col-md-6 column">
							<div class="thumbnail">
								<img src="img/i6.png" width="100%"/>
							</div>
						</div>
						<div class="col-md-6 column">
							<form action="index.php" method="get">
								<div class="row">
									<div class="col-md-4" >
										<h4>Time left :</h4>
									</div>
									<div class="col-md-8" >
										<h4>20 hr 01 min 59 sec</h4>
									</div>
								</div>
								<div class="row" style="margin-top:0px;">
									<div class="col-md-5">
										<h3>Current bid :</h3>
									</div>
									<div class="col-md-7" >
										<h3>$0.01</h3>
									</div>  
								</div>
								<div class="row" style="margin-top:20px;">
									<div class="col-md-12">
										<button type="submit" class="btn btn-info"style="width:100%">Place bid at $1.00 </button>
									</div>
								</div>
								<div class="row" style="margin-top:20px;">
									<div class="col-md-6">
										<input name="price" type="text" data-validation="number" class="form-control" style="width:100%;"></input>
										<p><center>specify your maximum bid</center></p>
									</div>
									<div class="col-md-6" >
										<button type="submit" class="btn btn-primary"style="width:100%">Place bid</button>
									</div>  
								</div>

							</form>
							<div class="row" style="margin-top:40px;">
								<div class="col-md-6" >
									<p>Sell information : XXXXXXXXXX</p>
									<p>100% positive feedback</p>
								</div>
								<div class="col-md-6" >
									<h3 style="color:#3399FF;">&#9733; &#9733; &#9733; &#9733; &#9734;</h3>
								</div>
							</div>
							<div class="row" style="margin-top:20px;">
								<div class="col-md-12">
									<a href="QA.html" class="btn btn-default"style="width:100%">Ask a question </a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 column">
						<div class="well-shadow">
							<legend>Description</legend>
							<div class="row" style="margin-top:20px;">
								<div class="col-md-3 column">
									<p>Name :</p>
								</div>
								<div class="col-md-9 column">
									<p>iPhone 6 64gb gold</p>
								</div>
							</div>

							<div class="row" style="margin-top:20px;">
								<div class="col-md-3 column">
									<p>Product Information :</p>
								</div>
								<div class="col-md-9 column">
									<p style="word-wrap: break-word;">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
								</div>
							</div>

							<div class="row" style="margin-top:20px;">
								<div class="col-md-3 column">
									<p>Technical specification :</p>
								</div>
								<div class="col-md-9 column">
									<p style="word-wrap: break-word;">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
								</div>
							</div>

							<div class="row" style="margin-top:20px;">
								<div class="col-md-3 column">
									<p>Shipping and payments :</p>
								</div>
								<div class="col-md-9 column">
									<p style="word-wrap: break-word;">xxxxxxxxxxxxxxxxxxxxx<br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
								</div>
							</div>

							<div class="row" style="margin-top:20px;">
								<div class="col-md-3 column">
									<p>Return policy :</p>
								</div>
								<div class="col-md-9 column">
									<p style="word-wrap: break-word;">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
								</div>
							</div>


						</div>
					</div>
				</div>
				<div class="col-md-2 column">
				</div>
			</div>

		</div>
	</div>
</div>
<!-- auction -->
@stop

@section('footer')
	<nav class="navbar navbar-default navbar-bottom2" role="navigation">
@stop