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
      @include('admin.sidebar')
      @include('admin.navbar')
    <div class="container-fluid page-body-wrapper">
        <div class="container align-center">
        <table class="table">
        <thead>
            <tr>
                <td>Customer</td>
                <td>Phone</td>
                <td>Address</td>
                <td>Product</td>
                <td>Quantity</td>
                <td>Price</td>
                <td>Status</td>
                <td>Action</td>
            </tr>  
        </thead>
        <tbody>
            @foreach($order as $orders)
              <tr>
                <td>{{$orders->name}}</td>
                <td>{{$orders->phone}}</td>
                <td>{{$orders->address}}</td>
                <td>{{$orders->product}}</td>
                <td>{{$orders->quantity}}</td>
                <td>{{$orders->price}}</td>
                <td>{{$orders->status}}</td>
                <td>
                    <a class="btn btn-success" href="{{url('delivery', $order->id)}}">Deliver</a>
                </td>
              </tr>
            @endforeach
            
        </tbody>
        </table>
        </div>
    </div>
      
    </div>
    @include('admin.script')
  </body>
</html>
