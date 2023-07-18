<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
      <div class="container-fluid page-body-wrapper">
        <div class="container align-center">
        <div class="row ">
              <div class="col-12 grid-margin p-5">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">All Products</h4>
                    <div class="table-responsive">
                    @if(session()->has('msg'))
                    <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ session('msg') }}
                    </div>
                    @endif
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Image </th>
                            <th> Name </th>
                            <th> Description </th>
                            <th> Price </th>
                            <th> Quantity </th>
                            <th> Edit </th>
                            <th> Delete </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($products as $product)
                          <tr>
                            <td> <img src="/productimage/{{ $product->image }}" alt=""> </td>
                            <td> {{ $product->name }} </td>
                            <td> {{ $product->description }} </td>
                            <td> {{ $product->price }} </td>
                            <td> <a class="btn btn-info" href="{{url('editproduct',$product->id)}}" />Edit </td>
                            <td> <a class="btn btn-danger" href="{{url('deleteproduct',$product->id)}}" />Delete </td>
                            <td> {{ $product->quantity }} </td>
                            
                            
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
        
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- endinject -->
    <!-- Plugin js for this page -->
    
    <!-- End custom js for this page -->
  </body>
</html>
