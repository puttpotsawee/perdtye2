@extends('perdtye/header')

@section('content')
<div class="container" style="margin-top:30px">
	
	<div class="row clearfix" style="height:200px">
		<div class="col-md-1 column">
			
		</div>
		
		<div class="col-md-3 column">
			<img alt="200x200" class="img-thumbnail" src="img/mhoo.jpg" />
			
		</div>
		
		<div class="col-md-4 column">
			<div class="well-shadow">
				<h4 style="text-align:top"> Name : {{$name}} {{$surname}}</h4>
				<p>&nbsp;</p>
				<h5 style="text-align:center">
					Feeding Ratings
				</h5>
				<table class="table table-bordered" style="border-spacing: 2px">
					<thread>
						<th style="text-align:center">
							<text style="font-size:110%">(+){{$positive}}</text>
							<text style="font-size:110%">Positive</text>
						</th>
						<th style="text-align:center">
							<text style="font-size:110%">(o){{$neutral}}</text>
							<text style="font-size:110%">Neutral</text>
						</th>
						<th style="text-align:center">
							<text style="font-size:110%">(-){{$negative}}</text>
							<text style="font-size:110%">Negative</text>
						</th>
					</thread>
				</table>
				

			</div>
		</div>
		<div class="col-md-1 column">
			
			<p>&nbsp;</p>
			<a href="editaccount" class="btn btn-default" style="width:300%">Edit Profile</a> 
			<p>&nbsp;</p>


			<a href="report" class="btn btn-default"  style="width:300%">Report</a> 
			<p>&nbsp;</p>
			<a href="sellregister" type="button" class="btn btn-default"  style="width:300%">Sell Register</a>
		</div>
		<div class="col-md-3 column">
		</div>
	</div>

</div>


<!--  Zone summary-->

<div class="container" style="margin-top:30px">
	
	<div class="row clearfix">
		<div class="col-md-1 column">
		</div>

		<div class="col-md-8 column">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#bidding" data-toggle="tab" aria-expanded="true">Bidding</a></li>
				<li class=""><a href="#didntwin" data-toggle="tab" aria-expanded="true">Didn't Win</a></li>
				<li class=""><a href="#history" data-toggle="tab" aria-expanded="true">History</a></li>
				<li class=""><a href="#sell" data-toggle="tab" aria-expanded="true">Sell</a></li>
				<li class=""><a href="#qa" data-toggle="tab" aria-expanded="true">Q/A</a></li>
				
				
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" id="bidding">
					<!-- <div class="container"> -->
					<!-- bidding -->
					<div class="col-md-12 column">
						<p>&nbsp;</p>
						<h4>
							Biding
						</h4>
						<table class="table" style="table-layout: fixed; width: 100%">
							<thead>
								<tr>
									<th width="5%">
										#
									</th>
									<th width="25%">
										Product
									</th>
									<th width="15%">
										Shop
									</th>
									<th width="15%">
										Time
									</th>
									<th width="15%">
										Price
									</th>
									<th width="25%">
										Status
									</th>
								</tr>
							</thead>
							<tbody>
								<?php for($x=1;$x<=2;$x++){?>
								<tr class="active">
									<td>
										<?php echo $x ?>
									</td>
									<td>
										<img src="img/iphone6 icon.jpg" width="100%"/>
										<p style="margin-top:15px;"><center>Iphone6</center></p>
									</td>
									<td>
										<text>Shop1</text>
										<text>(feedback)</text>
									</td>
									<td>
										<text>4h 42m left</text>
									</td>
									<td>
										<p style="color:red">THB 14,532</p>
										<p>21 bids</p>
									</td>
									<td>
										<a href="#" class="btn btn-success" style="width:100%;">Increase Max Bid</a>
									</td>
								</tr>
								<?php
							}
							?>
							<tr class="success">
								<td>
									<?php echo $x ?>
								</td>
								<td>
									<img src="img/iphone6 icon.jpg" width="100%"/>
									<p style="margin-top:15px;"><center>Iphone6</center></p>
								</td>
								<td>
									<text>Shop1</text>
									<text>(feedback)</text>
								</td>
								<td>
									<text>4h 42m left</text>
								</td>
								<td>
									<p style="color:#33AA00">THB 14,532</p>
									<p>21 bids</p>
								</td>
								<td>
									<a href="#" class="btn btn-info" style="width:100%;">View seller's other item</a>
								</td>
							</tr>
							
						</tbody>
					</table>
				</div>
			</div>
			<!-- Didntwin -->
			<div class="tab-pane fade" id="didntwin">
				<div class="col-md-12 column">
					<p>&nbsp;</p>
					<h4>Didn't Win</h4>
					<table class="table" style="table-layout: fixed; width: 100%">
						<thead>
							<tr>
								<th width="5%">
									#
								</th>
								<th width="25%">
									Product
								</th>
								<th width="17%">
									Shop
								</th>
								<th width="17%">
									Time
								</th>
								<th width="18%">
									Price
								</th>
								<th width="18%">
									Last Price
								</th>
							</tr>
						</thead>

						<tbody>
							<?php for($x=1;$x<=2;$x++){?>
							<tr class="active">
								<td>
									<?php echo $x ?>
								</td>
								<td>
									<img src="img/iphone6 icon.jpg" width="100%"/>
									<p style="margin-top:15px;"><center>Iphone6</center></p>
								</td>
								<td>
									<text>Shop1</text>
									<text>(feedback)</text>
								</td>
								<td>
									<text>4h 42m left</text>
								</td>
								<td>
									<p style="color:red">THB 14,532</p>
									<p>21 bids</p>
								</td>
								<td>
									<p style="color:#33AA00">THB 32,532</p>
								</td>
							</tr>
							<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
		<!-- history -->
		<div class="tab-pane fade" id="history">
			<div class="col-md-12 column">
				<p>&nbsp;</p>
				<h4>
					History
				</h4>
				<table class="table" style="table-layout: fixed; width: 100%">
					<thead>
						<tr>
							<th width="25%">
								Product
							</th>
							<th width="17%">
								Shop
							</th>
							<th width="17%">
								Order Time
							</th>
							<th width="18%">
								Price
							</th>
							<th width="18%">
								Status
							</th>
						</tr>
					</thead>

					<tbody>
						@foreach($history as $h)
						<tr class="active">
							<td>
								<img src={{$h->picture_url}} width="100%"/>
								<p style="margin-top:15px;"><center>{{$h->product_name}}</center></p>
							</td>
							<td>
								<text>{{$h->username}}</text>
							</td>
							<td>
								<text>{{$h->timestamp}}</text>
							</td>
							<td>
								<p style="color:black">{{$h->price}}</p>
							</td>
							<td>
								<a href="feedback" method="post" class="btn btn-success" style="width:100%;">Give Feedback</a>
								<p><a href="reportgood" class="btn btn-info" style="width:100%; margin-top:10px;">Report</a></p>
							</td>
						</tr>
						@endforeach
					
					
				</tbody>
			</table>
		</div>
	</div>
	<!-- Sell-->
	<div class="tab-pane fade" id="sell">
		<div class="col-md-12 column">
			<p>&nbsp;</p>
			<h4>
				Sell
			</h4>
			<table class="table" style="table-layout: fixed; width: 100%">
				<thead>
					<tr>
						<th width="25%">
							Product
						</th>
						<th width="15%">
							Order
						</th>
						<th width="15%">
							Available
						</th>
						<th width="20%">
							Price(Bath)
						</th>
						<th width="20%">
							
						</th>
					</tr>
				</thead>

				<tbody>
					@foreach($sell as $s)
					<tr class="active">
						<td>
							<img src={{$s->picture_url}} width="100%"/>
							<p style="margin-top:15px;"><center>{{$s->product_name}}</center></p>
						</td>
						<td>
							<text>{{$s->quantity - $s->remaining}}</text>
						</td>
						<td>
							<text>{{$s->remaining}}</text>
						</td>
						<td>
							<p style="color:black">{{$s->price}}</p>
						</td>
						<td>
							<a href="editdirectsell.html" class="btn btn-success" style="width:100%;">edit sell</a>
						</td>
					</tr>
					@endforeach
				
				
			</tbody>
		</table>
	</div>
</div>
<!-- Q/A -->
<div class="tab-pane fade" id="qa">
	<div class="col-md-12 column">
		<p>&nbsp;</p>
		<h4>
			Q/A
		</h4>
		<table class="table"  style="table-layout: fixed; width: 100%">
			<thead>
				<tr>

					<th width="30%">
						Product
					</th>
					<th width="20%">
						Shop
					</th>
					<th width="25%">
						Question
					</th>
					<th width="25%">
						Answer
					</th>
				</tr>
			</thead>

			<tbody>
				@foreach($question as $q)
				<tr class="active">

					<td>
						<img src={{$q->picture_url}} width="100%"/>
						<p style="margin-top:15px;"><center>{{$q->product_name}}</center></p>
					</td>
					<td style="word-wrap: break-word;">
						<text>{{$q->username}}</text>
					</td>
					<td style="word-wrap: break-word;">
						{{$q->question}}						
					</td>
					<td style="word-wrap: break-word;">
						{{$q->answer}}						
					</td>
				</tr>
				@endforeach
			
			
		</tbody>
	</table>
</div>
</div>

</div>
</div>
</div>
</div>
<!-- account -->
@stop

@section('footer')
	<nav class="navbar navbar-default navbar-bottom2" role="navigation">
@stop