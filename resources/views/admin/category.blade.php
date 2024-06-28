<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        input[type="text"]
        {
            width:400px;
            height:50px;
        }
        .div_deg
        {
            display:flex;
            justify-content:center;
            align-items:center;
            margin:30px;
        }
        .table_deg
        {
          text-align:center;
          margin:auto;
          border:2px solid yellowgreen;
          margin-top:50px;
        }
        th 
        {
          background: skyblue;
          padding: 15px;
          font-size:20px;
          font-weight:bold;
          color:white;
        }
        td 
        {
          color:white;
          padding:10px;
          border:1px solid skyblue;
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
        <h1 style="color:white;">ADD CATEGORY</h1>

        <div class="div_deg">

        <form action="{{url('add_category')}}" method="post">
          @csrf
            <div>
                <input type="text" name="category">
                <input class="btn btn-primary" type="submit" value="Add Category">
            </div>
            </form>
    </div>   
    
    <div>
      <table class="table_deg">
        <tr>
          <th>Category Name</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        
        @foreach($data as $data)
        <tr>
          <td>{{$data->category_name}}</td>
          <td>
            <a class="btn btn-success" href="{{url('edit_category',$data->id)}}">Edit</a>
          </td>
          <td>
            <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_category',$data->id)}}">Delete</a>
          </td>
        </tr>
        @endforeach
      </table>
      </div>

    </div>
    <!-- JavaScript files-->
    @include('admin.js')
        
   <script type="test/javascript">

    function confirmation(ev)
    {
      ev.preventDefault();

      var urlToRedirect = ev.currentTarget.getAttribute('href');
    
      console.log(urlTORedirect);

      swal
      ({
        title:"Are You Sure to Delete This",
        text:"This delete will be parmanet",
        icon:"warning",
        buttons:true,
        dangermode:true,

      })
      .then((willCancel)=>{
        if(willCancel)
        {
          window.location.href=urlToRedirect;
        }
      })
    }
   </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>