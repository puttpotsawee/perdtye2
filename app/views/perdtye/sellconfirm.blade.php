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
						<div class="well-shadow">
							<legend> Order </legend>
							<div class="row clearfix" style="margin-top:30px;">
								<div class="col-md-3 column">
									<div class="thumbnail">
										<img src="img/i6.png" width="100%"/>
										
									</div>
									<center><label>(123123 in stock)</label></center>
								</div>
								<div class="col-md-9 column">
									<form action=direct method="post">
										<div class="row">
											<div class="col-md-4" >
												<h4>Name :</h4>
											</div>
											<div class="col-md-8" >
												<h4> Pradinan Petchruangrong</h4>
											</div>
										</div>
										<div class="row" style="margin-top:20px;">
											<div class="col-md-4">
												<h5>Address: </h5>
											</div>
											<div class="col-md-8" >
												<h5>xxxxxxxxxxxxxxxxxxxxx</h5>
												<h5>xxxxxxxxxxxxxxxxxxxxx</h5>
											</div>  
										</div>
										<div class="row" style="margin-top:20px;">
											<div class="col-md-4">
												<h4>Item: </h4>
											</div>
											<div class="col-md-8" >
												<h4>iPhone6 64 gb gold</h4>
											</div>  
										</div>
										<div class="row" style="margin-top:20px;">
											<div class="col-md-4">
												<h4>Total Price: </h4>
											</div>
											<div class="col-md-8" >
												<h4>$3000 </h4>
											</div>  
										</div>
										<div class="row" style="margin-top:20px;">
											<div class="col-md-4">
												<h4>Quantity: </h4>
											</div>
											<div class="col-md-8" >
												<h4>12 </h4>
											</div>  
										</div>
										<div class="row" style="margin-top:20px;">
											<div class="col-md-4">
												<h5>Seller: </h5>
											</div>
											<div class="col-md-8" >
												<h5>Maew </h5>
											</div>  
										</div>
										<div class="row" style="margin-top:40px;">
											<div class="col-md-12">
												<button type="submit" class="btn btn-info"style="width:100%">Pay Now </button>
											</div>
										</div>
									</form>
									<div class="row" style="margin-top:20px;">
										<div class="col-md-6" >
											<a href="" class="btn btn-default"style="width:100%">Cancel </a>
										</div>
										<div class="col-md-6" >
											<button type="submit" class="btn btn-default"style="width:100%">Confirm</button>
										</div>
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