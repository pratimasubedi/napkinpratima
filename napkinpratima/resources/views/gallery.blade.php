@extends('home-master')
@section('content')





<div class="container album-intro">
	<h1>Production name</h1>
	<div class="row">
		
		<div class="col-md-3">
			<div class="album-image">
				<a href="{{ url('gallery-dynamic') }}">
					<img class="img-fluid" src="{{url('public/images/n9.jpg')}} ">

<div class="centered">Album 1</div>
       </a>
			</div>
		</div>
<div class="col-md-3">
			<div class="album-image">
				<a href="{{ url('gallery-dynamic') }}">
					<img class="img-fluid" src="{{url('public/images/n10.jpg')}} ">
<div class="centered">Album 2</div>
				</a>
			</div>
		</div>
		<div class="col-md-3">
			<div class="album-image">
				<a href="{{ url('gallery-dynamic') }}">
					<img class="img-fluid" src="{{url('public/images/n7.jpg')}}">
<div class="centered">Album 3</div>
				</a>
			</div>
		</div>
		<div class="col-md-3">
			<div class="album-image">
				<a href="{{ url('gallery-dynamic') }}">
				<img class="img-fluid" src="{{url('public/images/n10.jpg')}}">
<div class="centered">Album 4</div>
				</a>
			</div>
		</div>
	</div>
	

	
</div> 
@endsection