<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <!-- fontAwesome -->
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/css.css')}}">
    <title>MØ</title>
    <!-- goolge fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">  
</head>
  <body>
    <!-- start header  -->
    @include('Home.header')
    <!-- end header  -->
    <!-- start landing -->
    @include('Home.landing')
    </div> 
    <!-- end landing -->
    <!-- start articles  -->
    @include('Home.articles')
    <div class="spikes"></div>
    <!-- end articles  -->
    <!-- start gallery  -->
    @include('Home.gallery')
    <!-- end gallery  -->
    <!-- start features  -->
    {{-- @include('Home.features') --}}
    <!-- end features  -->
    <!-- start testimonials -->
    {{-- @include('Home.testimonials') --}}
    <!-- end testimonials -->
    <!-- start team  -->
    {{-- @include('Home.team') --}}
    <div class="spikes"></div>
    <!-- end team  -->
    <!-- start Services -->
    @include('Home.Services')
    <!-- start Services -->
    <!-- start skills  -->
    {{-- @include('Home.skills') --}}
    <!-- end skills  -->
    <!-- start work  -->
    @include('Home.work')
    <!-- end work  -->
    <!-- start events  -->
    {{-- @include('Home.events') --}}
    <!-- start events  -->
    <!-- start pricing  -->
    @include('Home.pricing')
    <!-- start pricing  -->
    <!-- start videos   -->
    @include('Home.videos')
    <!-- end videos   -->
    <!-- start stats  -->
    {{-- @include('Home.stats') --}}
    <!-- end stats  -->
    <!-- start dicount  -->
    @include('Home.discount')
    <!-- end dicount  -->
    <!-- start footer -->
    @include('Home.footer')
    <!-- end footer -->
  </body>
</html>