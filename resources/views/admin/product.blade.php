<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Corona Admin</title>
  <!-- Include CSS stylesheets -->
  @include('admin.css')
</head>
<body>
<div class="container-scroller">
  @include('admin.sidebar')
  @include('admin.navbar')
  <div class="container-fluid page-body-wrapper">
    <div class="container align-center">
   
      @if(session()->has('msg'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('msg') }}
      </div>
      @endif
      
      <form action="{{ url('productupload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Product Name</label>
          <input name="name" type="text" class="form-control" id="name" placeholder="Product Name">
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Product Price</label>
          <input name="price" type="number" class="form-control" id="price" placeholder="0.00">
        </div>
        <div class="mb-3">
          <label for="quantity" class="form-label">Product Quantity</label>
          <input name="quantity" type="number" class="form-control" id="quantity" placeholder="Quantity">
        </div>
      
        <div class="mb-3">
          <label for="description" class="form-label">Product Description</label>
          <textarea name="description" class="form-control" id="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="images" class="form-label">Upload File</label>
          <input type="file" name="file" class="form-control" id="images" placeholder="No File chosen">
        </div>
        <button class="btn btn-success" type="submit">Upload</button>
      </form>
    </div>
  </div>
</div>

  @include('admin.footer')
  @include('admin.script')
</body>
</html>
