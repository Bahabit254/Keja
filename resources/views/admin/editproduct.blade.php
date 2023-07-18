<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Keja App</title>
    <!-- plugins:css -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
           <div class="container align-center">
            @if(session()->has('msg'))
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ session('msg') }}
            </div>
            @endif

            <form action="{{ url('productupdate', $products->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input style="color: black;" name="name" type="text" class="form-control" id="name" value="{{$products->name}}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Product Price</label>
                <input style="color: black;" name="price" type="number" class="form-control" id="price" value="{{$products->price}}"">
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Product Quantity</label>
                <input style="color: black;" name="quantity" type="number" class="form-control" id="quantity" value="{{$products->quantity}}">
            </div>
      
            <div class="mb-3">
                <label for="description" class="form-label">Product Description</label>
                <input type="text" style="color: black;" name="description" class="form-control" id="description" value="{{$products->description}}" rows="3"></input>
            </div>
            <div>
                <label>Current Image</label>
                <img height="100" width="50" src="/productimage/{{$products->image}}" />
            </div>
            <div class="mb-3">
                <label for="images" class="form-label">Update Image</label>
                <input type="file" name="file" class="form-control" id="images" placeholder="No File chosen">
            </div>
            <button class="btn btn-success" type="submit">Upload</button>
            </form>
            </div> 
        </div>
    
        
    </div>
    @include('admin.script')
  </body>
</html>
