@extends('perdtye/header')

<!-- parameter received from BrowseController:
		$product
		$details
		$seller
	-->

	@section('content')
	<!-- auction -->
	<div class="container">
		<div class="row clearfix" style="margin-top:30px;">
			<div class="col-md-12 column">
				<div class="row clearfix">
					<div class="col-md-2 column">
					</div>
					<div class="col-md-8 column">
						<legend> {{$product->product_name}} </legend>
						<div class="row clearfix" style="margin-top:30px;">
							<div class="col-md-6 column">
								<div class="thumbnail">
									<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

										<!-- Wrapper for slides -->
										<div class="carousel-inner" role="listbox">

											<div class="item active">
												<img src="img/i6.png" width="100%"/>
											</div>
											
											<div class="item">
												<img src="img/i6.png" width="100%"/>
											</div>

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
							<div class="col-md-6 column">
								<form action="placebid" method="post">
									<div class="row">
										<div class="col-md-5" >
											<h4>End time :</h4>
										</div>
										<div class="col-md-7" >
											<h4> {{$details->end_time}} </h4>
										</div>
									</div>
									<div class="row" style="margin-top:0px;">
										<div class="col-md-5">
											<h3>Current bid</h3>
										</div>
										<div class="col-md-7" >
											<h3>{{$details->current_price}} Baht</h3>
										</div>  
									</div>
									<div class="row" style="margin-top:20px;">
										<div class="col-md-12">
											<button type="submit" class="btn btn-info"style="width:100%">Place bid at {{$details->bidding_range+$details->current_price}} Baht </button>
											<input name="idProduct" type="hidden" value={{$product->idProduct}}/>
										</div>
									</div>
									

								</form>

								<form action="maxbid" method="post">
									<div class="row" style="margin-top:20px;">
										<div class="col-md-6">
											<input name="maxbid_input" type="text" data-validation="number" class="form-control" style="width:100%;"></input>
											<input name="idProduct" type="hidden" value={{$product->idProduct}}/>
											<p><center>specify your maximum bid</center></p>
										</div>
										<div class="col-md-6" >
											<button type="submit" class="btn btn-primary"style="width:100%">Place bid</button>
										</div>  
									</div>

								</form>

								<div class="row" style="margin-top:40px;">
									<div class="col-md-6" >
										<p>Sell information : {{$seller->name}} {{$seller->surname}}</p>
										<p>100% positive feedback</p>
									</div>
									<div class="col-md-6" >
										<h3 style="color:#3399FF;">&#9733; &#9733; &#9733; &#9733; &#9734;</h3>
									</div>
								</div>
								<div class="row" style="margin-top:20px;">
									<div class="col-md-12">
										<a href="qa" class="btn btn-default"style="width:100%">Ask a question </a>
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
										<p> {{$product->product_name}} </p>
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
	<!-- auction -->
	@stop

	@section('footer')
	<nav class="navbar navbar-default navbar-bottom2" role="navigation">
		@stop