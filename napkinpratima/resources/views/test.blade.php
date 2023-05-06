 

@extends('home-master')
@section('content')





{{-- <div class="row">
  <div class="col-md-6 col-lg-4"  data-aos="fade-up">
    <div class="flip-container">
      <div class="flipper">
        <div class="box">
          <h2>Mellissa Clark</h2>
          <p>Web Designer</p>
        </div>
      </div>
      <div class="back">
        <!-- back content -->
        <blockquote>
          <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
        </blockquote>
        <div class="author d-flex">
          <div class="image mr-3 align-self-center">
            <img src="images/person_1.jpg" alt="">
          </div>
         </div>
      </div>
    </div>
  </div> <!-- .flip-container -->
</div>
<div class="col-md-6 col-lg-4"  data-aos="fade-up" data-aos-delay="100">

  <div class="flip-container hover">
    <div class="flipper">
      <div class="front" style="background-image: url(../images/image_6.jpg);">
        <div class="box">
          <h2>Mellissa Clark</h2>
          <p>Web Designer</p>
        </div>
      </div>
      <div class="back">
        <!-- back content -->
        <blockquote>
          <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
        </blockquote>
        <div class="author d-flex">
          <div class="image mr-3 align-self-center">
            <img src="images/person_2.jpg" alt="">
          </div>
          <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
        </div>
      </div>
    </div>
  </div> <!-- .flip-container -->

</div>
--}}

 {{--next --}
 <div class="container-fluid flipper">
  <div class="row">
    <div class="col-md-4">
      <div class="home-image-hover">
        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat."</p>
     
      <div class="row">
        <div class="col-md-2">
          <div class="home-image">
            <img class="img-fluid" src="{{url('public/images/g.jpg')}}">
          </div>
        </div>
        <div class="col-md-8">
          <div class="home-paragraph">
          <h4>Mellissa Clark<br>Web Designer</h4>
         </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>--}}


{{-- next --}}
{{-- <div class="ftco-section">
    <div class="container">
      <div class="block-3 d-md-flex" data-aos="fade-left">
        <div class="image" style="background-image: url('images/image_5.jpg'); "></div>
        <div class="text">
          <h4 class="subheading">Creative Title here</h4>
          <h2 class="heading">Far far away</h2>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
        </div>
      </div>
      <div class="block-3 d-md-flex" data-aos="fade-right">
        <div class="image order-2" style="background-image: url('images/image_6.jpg'); "></div>
        <div class="text order-1">
          <h4 class="subheading">Creative Title here</h4>
          <h2 class="heading">Far far away</h2>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
        </div>
      </div>
      <div class="block-3 d-md-flex" data-aos="fade-left">
        <div class="image" style="background-image: url('images/image_7.jpg'); "></div>
        <div class="text">
          <h4 class="subheading">Creative Title here</h4>
          <h2 class="heading">Far far away</h2>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
        </div>
      </div>
    </div>
  </div> --}}

  {{--img--}}
{{--  <div class="container home-section-slide">
  <div class="row">
    <div class="col-md-4">
      <div class="section-box-eight">
      
        <figure>
         <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation"</p>

         <div class="row home-circle-image">
          <div class="col-md-2">
            <div class="home-image">
              <img class="img-fluid" src="{{url('public/images/g.jpg')}}">
            </div>

          </div>
          <div class="col-md-10">
            <div class="home-paragraph">
              <h4>Lorem ipsum<br>Web Designer</h4>
            </div>
          </div>

        </div>

      </figure>
      <img src="http://www.tayloredwebs.co.uk/wp-content/uploads/2016/06/web-design-and-graphic-design-wallpapers.jpg" class="img-responsive"/>
    </div>
  </div> 
  <div class="col-md-4">

    <div class="home-image-hover">
      <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat."</p>

      <div class="row home-image-second-column">
        <div class="col-md-2">
          <div class="home-image">
            <img class="img-fluid" src="{{url('public/images/g.jpg')}}">
          </div>

        </div>



        <div class="col-md-10">
          <div class="home-paragraph">
            <h4>Lorem ipsum<br>Web Designer</h4>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="col-md-4 center-block">
    <div class="section-box-eight">
      
      <figure>
       <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ."</p>

       <div class="row home-circle-image">
        <div class="col-md-2">
          <div class="home-image">
             <img class="img-fluid" src="{{url('public/images/b3.jpg')}}"> 
              
          </div>

        </div>
        <div class="col-md-10">
          <div class="home-paragraph">
            <h4>Lorem ipsum<br>Web Designer</h4>
          </div>
        </div>
      </div>
    </figure>
    <img src="http://www.tayloredwebs.co.uk/wp-content/uploads/2016/06/web-design-and-graphic-design-wallpapers.jpg" class="img-responsive"/>
  </div>
</div>
</div>
</div> --}}





{{-- 
<div class="container flipper">
  <div class="row">
    <div class="col-md-4">

      <div class="home-image-hover">
        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat."</p>

        <div class="row">
          <div class="col-md-2">
            <div class="home-image">
              <img class="img-fluid" src="{{url('public/images/g.jpg')}}">
            </div>

          </div>



          <div class="col-md-10">
            <div class="home-paragraph">
              <h4>Lorem ipsum<br>Web Designer</h4>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="home-image-hover">
        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat."</p>

        <div class="row">
          <div class="col-md-2">
            <div class="home-image">
              <img class="img-fluid" src="{{url('public/images/g.jpg')}}">
            </div>
          </div>
          <div class="col-md-10">
            <div class="home-paragraph">
              <h4>Lorem ipsum<br>Web Designer</h4>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="home-image-hover">
        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat."</p>

        <div class="row">
          <div class="col-md-2">
            <div class="home-image">
              <img class="img-fluid" src="{{url('public/images/g.jpg')}}">
            </div>
          </div>
          <div class="col-md-10">
            <div class="home-paragraph">
              <h4>Lorem ipsum<br>Web Designer</h4>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<div class="text">
              <div class="subheading">Travel</div>
              <h3 class="heading">Far far away, behind the word mountains</h3>
              <div class="post-meta">
                <span>Wellie Clark</span>
                <span>March 20, 2018</span>
              </div>
            </div> --}}

            {{--  --}}
{{-- <div class="row">
<div class="col-md-4 center-block">
                <div class="section-box-eleven">
                    
                    <figure>
                        <h5>
                          <a href="#" class="Travel">Travel</a>
                        </h5>
                          <p>
                           <a href="#" class="btn pull-left">Far far away, behind the word mountains</a>
                         </p>
                           <h6>
                          <a href="#" class="Wellie Clark">Wellie Clark March 20, 2018</a>
                        </h6>
                    
                    </figure>
                  

                    <img src="http://www.tayloredwebs.co.uk/wp-content/uploads/2016/06/web-design-and-graphic-design-wallpapers.jpg" class="img-responsive"/>
                </div>
            </div>
          </div> --}}



          {{-- blog --}}
{{-- 
<div class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center"  data-aos="fade-up">
          <h2>Our Blog</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a href="blog-single.html" class="block-5" style="background-image: url('public/images/b1.jpg');">
            <div class="text">
              <div class="subheading">Travel</div>
              <h3 class="heading">Far far away, behind the word mountains</h3>
              <div class="post-meta">
                <span>Wellie Clark</span>
                <span>March 20, 2018</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <a href="blog-single.html" class="block-5" style="background-image: url('public/images/b2.jpg');">
            <div class="text">
              <div class="subheading">Travel</div>
              <h3 class="heading">Far far away, behind the word mountains</h3>
              <div class="post-meta">
                <span>Wellie Clark</span>
                <span>March 20, 2018</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <a href="blog-single.html" class="block-5" style="background-image: url('public/images/b3.jpg');">
            <div class="text">
              <div class="subheading">Travel</div>
              <h3 class="heading">Far far away, behind the word mountains</h3>
              <div class="post-meta">
                <span>Wellie Clark</span>
                <span>March 20, 2018</span>
              </div>
            </div>
          </a>
        </div>
      </div>

    </div>
  </div> --}}





  {{--  --}}

{{-- <div class="col-md-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="media block-6">
            <div class="icon"><i class="fab fa-facebook-f"></i></div>
            <div class="media-body">
              <h3 class="heading">Reach Performance</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div> --}}



        {{--napkin--}}

{{--
 <section class="ftco-section" id="section-about">
      <div class="container">
        <div class="row">
          <div class="col-md-12  mb-5" data-aos="fade-up">
            <h1 class="ftco-heading heading-thin mb-5">For busy business professionals &mdash; A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. </h1>
          </div>
        </div>
        
      </div>
    </section>



<div class="container pad-0">

  <div class="row">
   

    <div class="col-md-4 img-fluid">
      <div class="gallery-image">

        <img class="img-fluid" src="{{url('public/images/n7.jpg')}}">

  
      </div>
    </div>

    <div class="col-md-4 img-fluid">
      <div class="gallery-image">

        <img class="img-fluid" src="{{url('public/images/n7.jpg')}}">

  
      </div>
    </div>

    <div class="col-md-4 img-fluid">
      <div class="gallery-image">

        <img class="img-fluid" src="{{url('public/images/n7.jpg')}}">

      
      </div>
    </div>
  </div>  

  <div class="row"> 


    <div class="col-md-4 img-fluid">
      <div class="gallery-image">

        <img class="img-fluid" src="{{url('public/images/n7.jpg')}}">
  
      </div>
    </div>  


    <div class="col-md-4 img-fluid">
      <div class="gallery-image">

        <img class="img-fluid" src="{{url('public/images/n7.jpg')}}">

  
      </div>
    </div>  

    <div class="col-md-4 img-fluid">
      <div class="gallery-image">

        <img class="img-fluid" src="{{url('public/images/n7.jpg')}}">
      
      </div>
    </div>
  </div>
</div> --}}
{{-- <div id="owl-example" class="owl-carousel">
  <div class="owl-slide">
    <div class="owl--text">
    This is a full height Owl slider. There is nothing else interesting here!</div>
  </div>
  <div class="owl-slide">
    <div class="owl--text">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit!</div>
  </div>
  <div class="owl-slide">
    <div class="owl--text">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam excepturi voluptate eveniet consectetur numquam laboriosam.
    </div>
  </div>
</div> --}}
{{--owlcarousel-2--}}
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
   {{-- <div class="container">
    <div class="row">
      <div class="col-md-3">

      <div id="owl-example" class="owl-carousel">
        <div><img src="//placehold.it/300x300/936/c69/?text=1" alt=""></div>
      </div>
<div class="col-md-3">

        <div><img src="//placehold.it/300x300/099/3cc/?text=5" alt=""></div>
      </div>
        
      </div>
    </div>
  </div>
 --}}

 {{--  --}}

 <div class="container">
 <div class="slider slider_four_in_line">
  <div><img class="img-fluid" src="{{url('public/images/n1.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n2.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n3.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n4.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n5.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n6.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n7.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n8.jpg')}}"></div>
  <div><img class="img-fluid" src="{{url('public/images/n.jpg')}}"></div>
  <div class="next_button">NEXT</div>  
  <div class="prev_button">PREV</div>  
</div>
</div>
 <script>
   $(document).ready(function() {
     
     $('.slider_four_in_line').EasySlides({'autoplay': true, 'show': 9})
     

   });
 </script>

 {{--  --}}


 <div class="slider slider_one_big_picture">
  <div style="background-image: url(https://picsum.photos/1600/900/?random)">1</div>
  <div style="background-image: url(https://picsum.photos/1601/900/?random)">2</div>
  <div style="background-image: url(https://picsum.photos/1601/901/?random)">2</div>
  <div style="background-image: url(https://picsum.photos/1602/901/?random)">4</div>
  <div style="background-image: url(https://picsum.photos/1602/902/?random)">5</div>
  <div style="background-image: url(https://picsum.photos/1603/902/?random)">6</div>
  <div style="background-image: url(https://picsum.photos/1603/903/?random)">7</div>
  <div style="background-image: url(https://picsum.photos/1603/913/?random)">8</div>
  <div style="background-image: url(https://picsum.photos/1603/923/?random)">9</div>
  
  <div class="next_button">NEXT</div>  
  <div class="prev_button">PREV</div>  
  <div class="nav_indicators"></div>
</div>

<script>
   $(document).ready(function() {
     $('.slider_one_big_picture').EasySlides({'autoplay': true,'stepbystep':false, 'show': 5})
    
   });
 </script>

 <!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5">

    <div style="background-color: #21d192;">
      <div class="container">

        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">Get connected with us on social networks!</h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fa fa-facebook white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fa fa-twitter white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fa fa-google-plus white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fa fa-linkedin white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fa fa-instagram white-text"> </i>
            </a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

      <!-- Grid row -->
      <div class="row mt-3 dark-grey-text">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">Company name</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit.</p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Products</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a class="dark-grey-text" href="#!">MDBootstrap</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">MDWordPress</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">BrandFlow</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Bootstrap Angular</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Useful links</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a class="dark-grey-text" href="#!">Your Account</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Become an Affiliate</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Shipping Rates</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Help</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fa fa-envelope mr-3"></i> info@example.com</p>
          <p>
            <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
          <p>
            <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">© 2018 Copyright:
      <a class="dark-grey-text" href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

 <!--  testimonials -->
 <!-- <div class="col-md-4">
    <div class="home-image-hover">
      <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud nostrud exercitation."</p>
      <div class="row home-image-second-column">
        <div class="col-md-2">
          <div class="home-image">
            <img class="img-fluid" src="{{url('public/images/g.jpg')}}">
          </div>
        </div>
        <div class="col-md-10">
          <div class="home-second-column-paragraph">
            <h4>&mdash;Rajendra rai</h4>
            <h6>Web Designer</h6>
          </div>
        </div>
      </div>
    </div>
  </div> -->


  <section id="section-id-1533558618511" class="sppb-section ">
    <div class="sppb-row-container">
      <div class="sppb-section-title sppb-text-left">
        <h2 class="sppb-title-heading">Urgent<span>Cause</span>
        </h2>
      </div>
      <div id="sppb-addon-1533558618523" class="clearfix">
        <div class="sppb-progress ">
        <div class="sppb-progress-bar sppb-progress-bar-primary sppb-progress-bar-striped" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" data-width="48%">
          <span>48%</span>
          </div>
        </div>
      </div>
      <div id="sppb-addon-1533558618548" class="clearfix" >
        <div class="sppb-addon sppb-addon-raw-html ">
          <div class="sppb-addon-content">
            <div class="donate clearfix">
              <div class="donate pull-left">
                <span>Goal: $54000</span>
              </div>
                <div class="donate pull-right">
                Raised: $24000
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sppb-col-md-4" id="column-wrap-id-1533558618509">
      <div id="column-id-1533558618509" class="sppb-column urgent-cause" >
        <div id="sppb-addon-1533621658035" class="clearfix" ><div class="sppb-progress ">
        <div class="sppb-progress-bar sppb-progress-bar-primary sppb-progress-bar-striped" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" data-width="75%">
            <span>75%</span>
          </div>
        </div>
      </div>
      <div id="sppb-addon-1533621658038" class="clearfix" ><div class="sppb-addon sppb-addon-raw-html ">
        <div class="sppb-addon-content">
          <div class="donate clearfix">
            <div class="donate pull-left">
              <span>Goal: $92000</span>
            </div>
            <div class="donate pull-right">
              Raised: $69000
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="sppb-col-md-4" id="column-wrap-id-1533558618510">
  <div id="column-id-1533558618510" class="sppb-column urgent-cause">
   <div id="sppb-addon-1533621658065" class="clearfix" >
    <div class="sppb-progress ">
      <div class="sppb-progress-bar sppb-progress-bar-primary sppb-progress-bar-striped" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" data-width="68%">
        <span>68%</span>
      </div>
    </div>
  </div>
  <div id="sppb-addon-1533621658068" class="clearfix" >
    <div class="sppb-addon sppb-addon-raw-html ">
      <div class="sppb-addon-content">
        <div class="donate clearfix">
          <div class="donate pull-left">
            <span>Goal: $78000</span>
          </div>
         <div class="donate pull-right">
            Raised: $49000
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>









  @endsection