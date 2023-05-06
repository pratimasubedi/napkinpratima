

@extends('home-master')
@section('content')
 


<!-- next-section-1 -->
<div class="container"> 
<h1 class="contact-heading">Contact Us</h1> 
 <div class=" contact-section">
   <div class="row">
    <div class="col-md-6">
      <form action="#">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Your Name">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Your Email">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Subject">
        </div>
        <div class="form-group">
          <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
        </div>
        <div class="row">
          <div class="col-md-6">
        <div class="form-group">
          <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
        </div>
      </div>
        <div class="col-md-6">
        <div class="form-group">
          <input type="submit" value="Order Now" class="btn btn-primary py-3 px-5">
        </div>
      </div>
    </div>
      </form>
    </div>
    <div class="col-md-6" id="map">
      <div class="contact-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14132.16698363201!2d85.3407364!3d27.6851046!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8a6d736aeaacde2a!2sTripura+Napkin+Paper+Enterprises!5e0!3m2!1sen!2snp!4v1532937890932" width="100%" height="415" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
</div>




@endsection