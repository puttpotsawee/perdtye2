@extends('perdtye/header')

<!-- parameter received from BrowseController:
		$product
		$details
		$seller
-->

@section('content')
<!-- direct -->
<div class="container" style="margin-top:30px;">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-2 column">
				</div>
				<div class="col-md-8 column">
					<legend> {{$product->product_name}} </legend>
					<div class="row clearfix" style="margin-top:30px;">
						<div class="col-md-6 column">
							<div class="thumbnail">
								<img src="img/i6.png" width="100%"/>
							</div>
						</div>
						<div class="col-md-6 column">
							<form action="direct" method="post">
								<div class="row">
									<div class="col-md-5" >
										<h3>Price :</h3>
									</div>
									<div class="col-md-7" >
										<h3> {{$details->price}} Baht</h3>
									</div>
								</div>
								<div class="row" style="margin-top:20px;">
									<div class="col-md-5">
										<h4>Quantity: </h4>
										<label>({{$details->remaining}} in stock)</label>
									</div>
									<div class="col-md-7" >
										<input name="quanity_input" type="text" data-validation="number" class="form-control" style="width:100%; float:right;"></input>
									</div>  
								</div>
								<div class="row" style="margin-top:20px;">
									<div class="col-md-12">
										<button type="submit" class="btn btn-info"style="width:100%">Buy now </button>
									</div>
								</div>
							</form>
							<div class="row" style="margin-top:80px;">
								<div class="col-md-6" >
									<p>Sell information : {{$seller->name}} {{$seller->surname}}</p>
									<p>100% positive feedback</p>
								</div>
								<div class="col-md-6" >
									<h3>&#9733; &#9733; &#9733; &#9733; &#9734;</h3>
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
									<p>{{$product->product_name}}</p>
								</div>
							</div>

							<div class="row" style="margin-top:20px;">
								<div class="col-md-3 column">
									<p>Product Information :</p>
								</div>
								<div class="col-md-9 column">
									<p style="word-wrap: break-word;">{{$product->brand}}</p>
									<p style="word-wrap: break-word;">{{$product->model}}</p>
									<p style="word-wrap: break-word;">{{$product->property}}</p>
									<p style="word-wrap: break-word;">{{$product->condition}}</p>
									<p style="word-wrap: break-word;">{{$product->defect}}</p>
								</div>
							</div>

							<div class="row" style="margin-top:20px;">
								<div class="col-md-3 column">
									<p>Technical specification :</p>
								</div>
								<div class="col-md-9 column">
									<p style="word-wrap: break-word;">{{$product->dimension}}</p>
								</div>
							</div>

							<div class="row" style="margin-top:20px;">
								<div class="col-md-3 column">
									<p>Shipping and payments :</p>
								</div>
								<div class="col-md-9 column">
									<p style="word-wrap: break-word;">{{}}</p>
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
<!-- direct -->
@stop

@section('footer')
<nav class="navbar navbar-default navbar-bottom2" role="navigation">
	@stop