<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        .div_deg
        {
            display:flex;
            justify-content:center;
            align-items:center;
            margin-top:60px;
        }

        h1
        {
            color:white;
        }

        label 
        {
            display:inline-block;
            width: 200px;
            font: size 18px !important;
            color: white !important;
        }

        input[type='text']
        {
            width: 350px;
            height:50px;
        }

        textarea 
        {
            width: 450px;
            height:80px;
        }

        .input_deg
        {
            padding:15px;
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

        <h1>Add Product</h1>

       <div class="div_deg">
        <form action="{{url('upload_product')}}" method="post" enctypr="mulipart/form-data">
            @csrf
            <div class="input_deg">
                <label for="">Product Title</label>
                <input type="text" name="title" required>
            </div>

            <div class="input_deg">
                <label for="">Description</label>
                <textarea name="Description" required></textarea>
            </div>

            <div class="input_deg">
                <label for="">Price</label>
                <input type="text" name="price">
            </div>

            <div class="input_deg">
                <label for="">Quantity</label>
                <input type="number" name="qty" >
            </div>

            <div class="input_deg">
                <label for="">Product Category</label>
                <select name="category" required>
                    <option value="">select a option </option>
                    @foreach($category as $category)

                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                    @endforeach

                </select>
            </div>

            <div class="input_deg">
                <label for="">Product Image</label>
                <input type="file" name="image">
            </div>

            <div class="input_deg">
                <input class="btn btn-success" type="submit" value="Add Product">
            </div>

        </form>
       </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>