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
					for ($x = 0; $x <= 2; $x++) {
						?>
						<div class="row clearfix">

							<?php
							for ($y = 0; $y <= 2; $y++) {
								?>
								<div class="col-md-4 column">
									<div class="row clearfix">
										<div class="col-md-1 column">
										</div>
										<div class="col-md-11 column">
											<div class="row">

												<div class="thumbnail">
													<a href="auctiontype.html"><img src="img/i6.png" ></a>
													<div class="caption">
														<h3>iPhone6 64gb Gold</h3>
														<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit. ...</p>
														<div class="row clearfix">
															<div class="col-md-6 column">
																<h4 style="color:red;">Price : $300.21</h4>
															</div>
															<div class="col-md-6 column">
																<a href="directtype.html" class="btn btn-default" style="float: right" role="button">Buy Now</a>
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