@extends('perdtye/header')

<meta http-equiv="refresh" content="10" url="endauction">
@section('content')
	<h1> Perdtye: End Auction service </h1>
	@if($open_auctions->count() == 0)
		<h3>No auction was closed.</h3>
	@else
		<p> Number of auctions ended: {{$open_auctions->count()}}</p>
		@foreach($open_auctions as $el)
			{{$el}}
			<br/>
		@endforeach
	@endif
@stop

