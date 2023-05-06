
@extends('home-master')
@section('content')


<!-- main carousel -->

<div class=" container main-carousel">
 <div class="slider slider_circle_10">
  <div><img class="img-fluid" src="{{url('public/images/n.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n1.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n2.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n3.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n1.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n2.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n3.jpg')}}"></div>
  
  <div class="next_button">NEXT</div>  
  <div class="prev_button">PREV</div>  
</div>
</div>

<script>
 $(document).ready(function() {
   
   $('.slider_circle_10').EasySlides({'autoplay': true, 'show': 6})
   
 });
</script>







{{--introduction--}}
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="home-introduction">
        <h1> Napkin industry is one of the famous industry inside the country lorem ipsum dolor sit amet-consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat..</h1>
      </div>
    </div>
    <div class="col-md-6">
     <div class="home-video">
      <iframe width="100%" height="315px" src="https://www.youtube.com/embed/TSwkg9JM_ds" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
  </div>
</div>
</div>
{{--ceo-description--}}
<div class="container home-ceo-introduction">
  <div class="row">
    <div class=" col-md-5">
      <div class="home-ceo-images">
        <img class="img-fluid" src="{{url('public/images/raju.jpg')}}">
      </div>
    </div>
    <div class="col-md-7">
      <div class="home-ceo-views">
        <h1>Message from ceo</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut ali</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis</p>
      </div>
    </div>
  </div>
</div>
{{-- highlighted products --}}

<div class="highlighted-products">
  <h1>Highlighted Products</h1>
</div>

 <div class="slider slider_four_in_line">
  <div><img class="img-fluid" src="{{url('public/images/n1.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n2.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n3.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n4.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n1.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n2.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n3.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n.jpg')}}"></div>
  <div class="next_button">NEXT</div>  
  <div class="prev_button">PREV</div>  
</div>

 <script>
   $(document).ready(function() {
     
     $('.slider_four_in_line').EasySlides({'autoplay': true, 'show': 9})
     

   });
 </script>

{{--services--}}
<div class="container next-section-4 ">
  <div class="home-what-we-do">
    <h2>What We Do</h2>
  </div>
  <div class="row">
    <div class="col-md-6 col-lg-4">
      <div class="home-media-body">
       <i class="fas fa-truck fa-3x"></i>
       <h4>Delivery</h4>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
     </div>
   </div>      
   <div class="col-md-6 col-lg-4">
    <div class="home-media-body">
     <i class="fas fa-truck fa-3x"></i>
     <h4>Delivery</h4>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
   </div>
 </div>      
 <div class="col-md-6 col-lg-4">
   <div class="home-media-body">
     <i class="fas fa-truck fa-3x"></i>
     <h4>Delivery</h4>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
   </div>
 </div>    
 <div class="col-md-6 col-lg-4">
  <div class="home-media-body">
   <i class="fas fa-truck fa-3x"></i>
   <h4>Delivery</h4>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
 </div>
</div>
<div class="col-md-6 col-lg-4">
  <div class="home-media-body">
   <i class="fas fa-truck fa-3x"></i>
   <h4>Delivery</h4>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
 </div>
</div>      
<div class="col-md-6 col-lg-4">
  <div class="home-media-body">
   <i class="fas fa-truck fa-3x"></i>
   <h4> Delivery</h4>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
 </div>
</div>
</div>
</div>

{{-- home-images --}}
<div class="container home-images-section"> 
  <h1>Gallery</h1> 
  <div class="row">
    <div class="col-md-4">
      <div class="home-gallery-1">
       <img class="img-fluid" src="{{url('public/images/n6.jpg')}}">
     </div>
   </div>
   <div class="col-md-4">
    <div class="home-gallery-1">
     <img class="img-fluid" src="{{url('public/images/n10.jpg')}}">
    </div>
 </div>
 <div class="col-md-4">
  <div class="home-gallery-1">
   <img class="img-fluid" src="{{url('public/images/n7.jpg')}}">
 </div>
</div>
</div>
<div class="row">
 <div class="col-md-4">
  <div class="home-gallery-2">
   <img class="img-fluid" src="{{url('public/images/n8.jpg')}}">
</div>
</div>
<div class="col-md-4">
  <div class="home-gallery-2">
   <img class="img-fluid" src="{{url('public/images/n4.jpg')}}">
</div>
</div>
<div class="col-md-4">
  <div class="home-gallery-2">
   <img class="img-fluid" src="{{url('public/images/n9.jpg')}}">
 </div>
</div>
</div>
<div class="home-gallery-button">
  <a href="gallery">VIEW ALL</a>
</div>
</div>


{{--team-section--}}
<div class="container">
  <div class="home-team-section">
    <h2 class="paragraph">Our Team</h2>
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <a href="ourteam" class="home-background-image-section"style="background:linear-gradient(rgba(0, 0, 0, .2),rgba(0, 0, 0, 0.5)),url(public/images/b1.jpg); background-size: cover;
        background-repeat: no-repeat;
        background-position: center;">
        <div class="text">
          <h3 class="sub-heading">Wellie Clark</h3>
          <div class="home-heading-section">
            <span>Degignation</span>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
      <a href="ourteam" class="home-background-image-section" style="background:linear-gradient(rgba(0, 0, 0, .2),rgba(0, 0, 0, 0.5)),url(public/images/b3.jpg); background-size: cover;
      background-repeat: no-repeat;
      background-position: center;">
      <div class="text">
        <h3 class="sub-heading">Wellie Clark</h3>
        <div class="home-heading-section">
          <span>Degignation</span>
        </div>
      </div>
    </a>
  </div>
  <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
    <a href="ourteam" class="home-background-image-section" style="background:linear-gradient(rgba(0, 0, 0, .2),rgba(0, 0, 0, 0.5)),url(public/images/b2.jpg); background-size: cover;
    background-repeat: no-repeat;
    background-position: center;">
    <div class="text">
      <h3 class="sub-heading">Wellie Clark</h3>
      <div class="home-heading-section">
        <span>Degignation</span>
      </div>
    </div>
  </a>
</div>
</div>
<div class="row">
  <div class="col-md-6 col-lg-4">
    <a href="ourteam" class="home-background-image-section"style="background:linear-gradient(rgba(0, 0, 0, .2),rgba(0, 0, 0, 0.5)),url(public/images/b1.jpg); background-size: cover;
    background-repeat: no-repeat;
    background-position: center;">
    <div class="text">
      <h3 class="sub-heading">Wellie Clark</h3>
      <div class="home-heading-section">
        <span>Degignation</span>
      </div>
    </div>
  </a>
</div>
<div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
  <a href="ourteam" class="home-background-image-section" style="background:linear-gradient(rgba(0, 0, 0, .2),rgba(0, 0, 0, 0.5)),url(public/images/b3.jpg); background-size: cover;
  background-repeat: no-repeat;
  background-position: center;">
  <div class="text">
    <h3 class="sub-heading">Wellie Clark</h3>
    <div class="home-heading-section">
      <span>Degignation</span>
    </div>
  </div>
</a>
</div>
<div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
  <a href="ourteam" class="home-background-image-section" style="background:linear-gradient(rgba(0, 0, 0, .2),rgba(0, 0, 0, 0.5)),url(public/images/b2.jpg); background-size: cover;
  background-repeat: no-repeat;
  background-position: center;">
  <div class="text">
    <h3 class="sub-heading">Wellie Clark</h3>
    <div class="home-heading-section">
      <span>Degignation</span>
    </div>
  </div>
</a>
</div>
</div>
</div>
</div>
{{--testimonials--}}
<div class="container-fluid">
  <div class="home-testimonials">
    <h2>Testimonials</h2>
  </div>
</div>

{{--testimonials-description--}}
<div class="container home-section-slide">
  <div class="row">
    <div class="col-md-4">
      <div class="home-testimonials-section">
        <figure>
         <p>"Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud"</p>
         <div class="row home-circle-image">
          <div class="col-md-2">
            <div class="home-image">
              <img class="img-fluid" src="{{url('public/images/4.jpg')}}">
            </div>
          </div>
          <div class="col-md-10">
            <div class="home-paragraph">
              <h4>&mdash;Rajendra rai</h4>
              <h6>Web Designer</h6>
            </div>
          </div>
        </div>
      </figure>
      <img class="img-fluid" src="{{url('public/images/4.jpg')}}"> 
    </div>
  </div> 
  
    <div class="col-md-4">
      <div class="home-testimonials-section">
        <figure>
         <p>"Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud"</p>
         <div class="row home-circle-image">
          <div class="col-md-2">
            <div class="home-image">
              <img class="img-fluid" src="{{url('public/images/4.jpg')}}">
            </div>
          </div>
          <div class="col-md-10">
            <div class="home-paragraph">
              <h4>&mdash;Rajendra rai</h4>
              <h6>Web Designer</h6>
            </div>
          </div>
        </div>
      </figure>
      <img class="img-fluid" src="{{url('public/images/4.jpg')}}"> 
    </div>
  </div> 
  <div class="col-md-4 center-block">
    <div class="home-testimonials-section">
      <figure>
       <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud."</p>
       <div class="row home-circle-image">
        <div class="col-md-2">
          <div class="home-image">
           <img class="img-fluid" src="{{url('public/images/4.jpg')}}"></div>
         </div>
         <div class="col-md-10">
          <div class="home-paragraph">
            <h4>&mdash;Rajendra rai</h4>
            <h6>Web Designer</h6>
          </div>
        </div>
      </div>
    </figure>
    <img class="img-fluid" src="{{url('public/images/4.jpg')}}"> 
  </div>
</div>
</div>
</div>






@endsection