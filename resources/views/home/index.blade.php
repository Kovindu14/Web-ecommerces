<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
    Waruna
  </title>
@include('home.css')
  
</head>

<body>
  <div class="hero_area">
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->
    @include('home.slider')
   

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->
@include('home.product')
 

  <!-- end shop section -->

  <!-- contact section -->
@include('home.contact')
  

  <!-- end contact section -->


  <!-- info section -->

 @include('home.footer')

  <!-- end info section -->
@include('home.js')

  

</body>

</html>