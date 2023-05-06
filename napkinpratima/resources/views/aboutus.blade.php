@extends('home-master')
@section('content')

<div class="container about-us-section">
	<h1 class=" about-us-heading">About us</h1>
	<div class="about-ceo-introduction">
    <div class="row">
      <div class=" col-md-5">
        <div class="about-ceo-images">
          <img class="img-fluid" src="{{url('public/images/raju.jpg')}}">
        </div>
      </div>
      <div class="col-md-7">
        <div class="about-ceo-views">
          <h2>Message from ceo</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut ali</p>


          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis</p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection