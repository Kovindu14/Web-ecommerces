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
    Giftos
  </title>
@include('home.css')
<style type="text/css">
    .div_center
    {
        display:flex;
        justify-content:center;
        align-items:center;
        padding: 30px;
    }

    .detail-box
    {
        padding:15px;
    }
</style>
  
</head>

<body>
  <div class="hero_area">
    @include('home.header')
    <!-- end header section -->




    <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">
       

        <div class=" col-md-12 ">
          <div class="box">
            <a href="">
              <div class="idiv_center">
                <img width="400px" src="/products/{{$data->image}}" alt="">
              </div>

              
              <div class="detail-box">
                <h6>
                  {{$data->title}}
                </h6>
                <h6>
                  Price
                  <span>
                    ${{$data->price}}
                  </span>
                </h6>
              </div>

              <div class="detail-box">
                <h6>category:
                  {{$data->category}}
                </h6>
                <h6>
                 Available Quantity
                  <span>
                    {{$data->quantity}}
                  </span>
                </h6>
              </div>

              <div class="detail-box">
                
                
                  <p>
                    {{$data->description}}
                  </p>
                
              </div>
            
          </div>
        </div>

    
        
        
      </div>
      
    </div>
  </section>






 @include('home.footer')

  <!-- end info section -->
@include('home.js')

  

</body>

</html>