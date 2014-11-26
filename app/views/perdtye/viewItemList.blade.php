@extends('perdtye/header')

@section('content')
<!-- Top item -->
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-1 column">
				</div>
				<div class="col-md-10 column">
					<?php 
					for ($x = 0; $x < 3; $x++) {
						?>
						<div class="row clearfix">

							<?php
							for ($y = 0; $y < 3; $y++) {
								$item = $sendProduct[$x+$y];
								$product = $item['product'];
								$price = $item['price'];
								$picture = $item['picture'];
								?>
								<div class="col-md-4 column" style="vertical-align:bottom">
									<div class="row clearfix">
										<div class="col-md-1 column">
										</div>
										<div class="col-md-11 column">
											<div class="row">

												<div class="thumbnail">
													<a href=view?id={{$product->idProduct}}><img src={{$picture}} ></a>
													<div class="caption">
														<h3><a href=view?id={{$product->idProduct}}>{{$product->product_name}}</a></h3>
														<p style="word-wrap: break-word;">{{$product->brand}}</p>
														<p style="word-wrap: break-word;">{{$product->model}}</p>
														<p style="word-wrap: break-word;">{{$product->property}}</p>
														<p style="word-wrap: break-word;">{{$product->condition}}</p>
														<p style="word-wrap: break-word;">{{$product->defect}}</p>
														<div class="row clearfix">
															<div class="col-md-6 column">
																<h4 style="color:red;">Price : {{$price}}</h4>
															</div>
															<div class="col-md-6 column">
																@if($product->type == 'direct')
																<a href="directtype.html" class="btn btn-default" style="float: right" role="button">Buy Now</a>
																@elseif($product->type == 'auction')
																<a href="directtype.html" class="btn btn-danger" style="float: right" role="button">Bid</a>
																
																@endif
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php
							} 
							?></div><?php
						} 
						?>

					</div>
					<div class="col-md-1 column">
					</div>
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
			</div>
		</div>
	</div>
	<!-- Top item -->
	@stop

	@section('footer')
		<nav class="navbar navbar-default navbar-bottom2" role="navigation">
	@stop