@extends('perdtye/header')

<!-- parameter received from SearchController:
		$result as list of Product [leftJoin Product_auction] [leftJoin Product_direct] join Member
-->

@section('content')
<!-- Search -->
<div class="container">  
	<div class="col-md-2"> 
	</div> 
	<div class="col-md-8"> 
	
		@if ($result->count() == 0)
		<h1> No product found. </h1>
		@else
		<h1> Search Result </h1>
		@endif
	
		<div class="well-shadow">

			<div class="row clearfix">

				<div class="col-md-5 column">
					<div class="btn-group">
						<a href="search.php?category=all" class="btn btn-default" style="background-color:white;">All Listing</a>
						<a href="search.php?category=auc" class="btn btn-default">Auction</a>
						<a href="search.php?category=buy" class="btn btn-default">Buy it now</a>
					</div>
				</div>
				<div class="col-md-3 column">

				</div>


				<div class="col-md-1 column">
					<h4  style="text-align:center">Sort:</h4>
				</div>
				<div class="col-md-3 column">
					<select class="form-control" id="select" name="sortprice">
						<option value="1">Best Match</option>
						<option value="2">Price</option>
						<option value="3">Favorite</option>

					</select>
				</div>

			</div>
			<div class="row clearfix">
				<div class="col-md-12 column">

					<p>&nbsp;</p>
				</div>
			</div>
			<legend></legend>
			<div class="row clearfix">

				<div class="col-md-12 column">
				</div>
			</div>
			@foreach($result as $r)
			
			<div class="row" style="margin-top:20px">
				<div class="col-md-4 column">
					<img width="100%" src="img/i6.png" >
				</div>
				<div class="col-md-8 column">
					<div class="caption" value={{$r->idProduct}}>
						<a href = {{$r->type}}?id={{$r->idProduct}}><h3> {{$r->product_name}} </h3></a>
						<p> {{$r->brand}} <br> {{$r->model}} </p>
						<div class="row clearfix" style="margin-bottom:0px;">
							<div class="col-md-6 column">
								<h4 style="color:red;">
									@if($r->type == 'auction')
									Starting bid : {{$r->current_price}} Baht
									@else
									Price : {{$r->price}} Baht
									@endif
								</h4>
								<h5 style="color:black; margin-top:20px;">
									@if($r->type == 'auction')
									Bid
									@else
									Buy it now
									@endif
								</h5>
							</div>
							<div class="col-md-6 column">
								<h5 style="color:grey;">From : 
									{{($r->username)}}
								</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
			
	</div> 
	<div class="col-md-2"> 
	</div> 	
</div>
</div>
<!-- Search -->
@stop

@section('footer')
	<nav class="navbar navbar-default navbar-bottom2" role="navigation">
@stop