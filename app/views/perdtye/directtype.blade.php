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
					@if ($details->remaining > 0)
					<legend> {{$product->product_name}} </legend>
					@else
					<legend> [SOLD OUT] {{$product->product_name}} </legend>
					@endif
					<div class="row clearfix" style="margin-top:30px;">
						<div class="col-md-6 column">
							<div class="thumbnail">
								<!-- <img src="img/i6.png" width="100%"/> -->
								<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="max-height:395px;">
									<!-- Indicators -->
									<!-- <ol class="carousel-indicators">
										<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
										<li data-target="#carousel-example-generic" data-slide-to="1"></li>
										<li data-target="#carousel-example-generic" data-slide-to="2"></li>
									</ol> -->

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<!-- <div class="item active">
											<img src="http://placehold.it/1200x315" alt="...">
										</div>
										<div class="item">
											<img src="http://placehold.it/1200x315" alt="...">
										</div>
										<div class="item">
											<img src="http://placehold.it/1200x315" alt="...">
										</div> -->

										@foreach($pictures as $pic)
											<?php
											if(!isset($first)){
												echo '<div class="item active">';
												$first = true;
											} else {
												echo '<div class="item">';
											}
											?>
											<img src={{$pic->picture_url}} alt="...">
											</div>
											
										@endforeach
									</div>

									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
									</a>
								</div> <!-- Carousel -->

							</div>
						</div>
						<div class="col-md-6 column">
							<form action=direct method="post">
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
										@if ($details->remaining > 0)
										<input name="quantity_input" type="text" data-validation="number" data-validation-allowing=range[1;{{$details->remaining}}] class="form-control" style="width:100%; float:right;"></input>
										@else
										<input disabled name="quantity_input" type="text" data-validation="number" data-validation-allowing=range[1;{{$details->remaining}}] class="form-control" style="width:100%; float:right;"></input>
										@endif
										<input name="idProduct" type="hidden" value={{$product->idProduct}}/>
									</div>  
								</div>
								<div class="row" style="margin-top:20px;">
									<div class="col-md-12">
										@if ($details->remaining > 0)
										<button type="submit" class="btn btn-info"style="width:100%">Buy now </button>
										@else
										<button disabled type="submit" class="btn btn-info"style="width:100%">Buy now </button>
										@endif
									</div>
								</div>
							</form>
							<div class="row" style="margin-top:80px;">
								<div class="col-md-5" >
									<h4>Seller: </h4>
								</div>
								<div class="col-md-5" >
									<h4><a href=account?id={{$seller->idmember}}>{{$seller->name}} {{$seller->surname}}</a></h4>
								</div>
							</div>
							<div class="row" style="margin-top:20px;">
								<div class="col-md-12">
									@if ($details->remaining > 0)
									<a href=qa?id={{$product->idProduct}} class="btn btn-default"style="width:100%">Ask a question </a>
									@else
									<a disabled href=qa?id={{$product->idProduct}} class="btn btn-default"style="width:100%">Ask a question </a>
									@endif
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
									<p style="word-wrap: break-word;">{{$product->payment_method}}</p>
									<p style="word-wrap: break-word;">{{$product->packaging_method}}</p>
									<p style="word-wrap: break-word;">{{$product->packaging_charge}}</p>
									<p style="word-wrap: break-word;">{{$product->shipping_method}}</p>
									<p style="word-wrap: break-word;">{{$product->shipping_fee}}</p>
								</div>
							</div>

							<div class="row" style="margin-top:20px;">
								<div class="col-md-3 column">
									<p>Return policy :</p>
								</div>
								<div class="col-md-9 column">
									<p style="word-wrap: break-word;">{{$product->refund_policy}}</p>
									<p style="word-wrap: break-word;">{{$product->refund_charge}}</p>
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
