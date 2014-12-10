@extends('perdtye/header')

<meta http-equiv="refresh" content="5" url="endauction">
@section('content')

<div class="col-sm-3">
</div>
<div class="col-sm-6">

	<div class="well-shadow">
		<legend>Perdtye: End Auction service</legend>
		@if($open_auctions->count() == 0)
		<h4>No auction was closed.</h4>
		@else
		<p> Number of auctions ended: {{$open_auctions->count()}}</p>
		@foreach($open_auctions as $el)
		{{$el}}
		<br/>
		@endforeach
		@endif
		<p style="margin-top:40px; text-align:right;">This page refresh every 5 seconds.</p>
	</div>
</div>
<div class="col-sm-3">
</div>




@stop

@section('footer')
<nav class="navbar navbar-default navbar-bottom2" style="bottom:0%;position: fixed;" role="navigation">
	@stop