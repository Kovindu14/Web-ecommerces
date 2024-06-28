<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style type="text/css">
        .div_deg 
        {
            display:flex;
            justify-content:center;
            align-items:center;
            margin-top:6px;
        }

        .table_deg
        {
            border:2px solid greenyellow;
        }

        th 
        {
            color:white;
            background:skyblue;
            font-size:19px;
            font-weight:bold;
            padding:15px;
        }

        td 
        {
            border:1px solid skyblue;
            text-align:center;
            color:white;
        }

        input[type='search'] 
        {
          width: 500px;
          height:60px;
          margin-left:50px;
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        <form action="{{url('product_search')}}" method="get">
          @csrf
          <input type="search" name="search">
          <input type="submit" class="btn btn-secondary" value="Search">

        </form>
       
        <div class="div_deg">
            <table class="table_deg">
                <tr>
                    <th>Product Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>image</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                @foreach($product as $products)

                <tr>
                    <td>{{$products->title}}</td>
                    <td>{!!Str::limit($products->description),20!!}</td>
                    <td>{{$products->category}}</td>
                    <td>{{$products->price}}</td>
                    <td>{{$products->quantity}}</td>
                    <td>
                        <img height="120px" width="120px" src="products/{{$products->image}}" alt="">
                    </td>
                    <td>
                      <a class="btn btn-danger" href="{{url('delete_product',$products->id)}}">Delete</a>
                    </td>

                    <td>
                      <a class="btn btn-success" href="{{url('update_product',$products->id)}}">Update</a>
                    </td>
                </tr>
                @endforeach
            </table>
            

            </div>
            <div class="div_deg"> {{$product->links()}}</div>
            
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>