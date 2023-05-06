
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>laravel</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      <!--fonts awesome icons-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

      <!-- bootstrap css -->
       <link rel="stylesheet" type="text/css" href="{{url('public/css/bootstrap.min.css')}}">

    
  {{--slider--}}
  <link href="{{url('public/css/jquery.easy_slides.css')}}" rel="stylesheet" type="text/css" />


        <!-- style -->

   <link rel="stylesheet" type="text/css" href="{{url('public/css/test.css')}}">
   <link rel="stylesheet" type="text/css" href="{{url('public/css/header.css')}}">
   <link rel="stylesheet" type="text/css" href="{{url('public/css/footer.css')}}">
   <link rel="stylesheet" type="text/css" href="{{url('public/css/home.css')}}">
   <link rel="stylesheet" type="text/css" href="{{url('public/css/aboutus.css')}}">
   <link rel="stylesheet" type="text/css" href="{{url('public/css/ourproduct.css')}}">
     <link rel="stylesheet" type="text/css" href="{{url('public/css/ourservices.css')}}">
      <link rel="stylesheet" type="text/css" href="{{url('public/css/ourteam.css')}}">
       <link rel="stylesheet" type="text/css" href="{{url('public/css/gallery.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('public/css/video.css')}}">
         <link rel="stylesheet" type="text/css" href="{{url('public/css/contact.css')}}">

  <!--  jquery --> 


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    {{--slider--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        </head>
    <body>
   
    @include('header.header')
    @yield('content')
    @include('footer.footer')

    </body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{url('public/js/bootstrap.min.js')}}"></script>
<!-- script -->
    <script type="text/javascript" src="{{url('public/js/js.js')}}"></script>

   
 

    <!-- jquery js slider -->
    
    <script src="{{ url('public/js/jquery.easy_slides.js')}}"></script>
</html>
