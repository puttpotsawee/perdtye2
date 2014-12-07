	@extends('perdtye/header')

<!-- parameter received from DirectBuyController:
		$product
		$details
		$seller
		$quantity
		$user
		$address
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
						<div class="well-shadow">
							<legend> Order </legend>
							<div class="row clearfix" style="margin-top:30px;">
								<div class="col-md-3 column">
									<div class="thumbnail">
										<img src="img/i6.png" width="100%"/>
										
									</div>
									<center><label>({{$details->remaining}} in stock)</label></center>
								</div>
								<div class="col-md-9 column">
									<form action="paynow" method="post">
										<div class="row">
											<div class="col-md-4" >
												<h4>Name :</h4>
											</div>
											<div class="col-md-8" >
												<h4> {{$user->name}} {{$user->surname}} </h4>
											</div>
										</div>
										<div class="row" style="margin-top:20px;">
											<div class="col-md-4">
												<h5>Address: </h5>
											</div>
											<div class="col-md-8" >
												<h5>{{$address->house_number}} {{$address->road}}, {{$address->district}} </h5>
												<h5>{{$address->city}}, {{$address->province}} {{$address->zipcode}} {{$address->country}} </h5>
											</div>  
										</div>
										<div class="row" style="margin-top:20px;">
											<div class="col-md-4">
												<h4>Item: </h4>
											</div>
											<div class="col-md-8" >
												<h4>{{$product->product_name}}</h4>
											</div>  
										</div>
										<div class="row" style="margin-top:20px;">
											<div class="col-md-4">
												<h4>Quantity: </h4>
											</div>
											<div class="col-md-8" >
												<h4>{{$quantity}} </h4>
											</div>  
										</div>
										<div class="row" style="margin-top:20px;">
											<div class="col-md-4">
												<h4>Total Price: </h4>
											</div>
											<div class="col-md-8" >
												<h4> {{$quantity * $details->price}} Baht </h4>
											</div>  
										</div>
										<div class="row" style="margin-top:20px;">
											<div class="col-md-4">
												<h5>Seller: </h5>
											</div>
											<div class="col-md-8" >
												<h5>{{$seller->name}} {{$seller->surname}} </h5>
											</div>  
										</div>
										<div class="row" style="margin-top:40px;">
											<div class="col-md-12">
												<input name="idProduct" type="hidden" value={{$product->idProduct}}>
												<input name="quantity" type="hidden" value={{$quantity}}>

												<button type="submit" class="btn btn-info"style="width:100%">Pay Now </button>
											</div>
										</div>
									</form>
									<div class="row" style="margin-top:20px;">
										<div class="col-md-6" >
											<a href={{$product->type}}?id={{$product->idProduct}} class="btn btn-default"style="width:100%">Cancel </a>
										</div>
										<form action="confirm" method="post">
											<div class="col-md-6" >
												<input name="idProduct" type="hidden" value={{$product->idProduct}}>
												<input name="quantity" type="hidden" value={{$quantity}}>
												
												<button type="submit" class="btn btn-default"style="width:100%">Confirm</button>
											</div>
										</form>
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