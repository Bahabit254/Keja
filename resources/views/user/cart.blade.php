<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Abacus Fashion House</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--



    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="userdash/assets/css/fontawesome.css">
    <link rel="stylesheet" href="userdash/assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="userdash/assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="userdash/index.html"><h2>Sixteen <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="userdash/index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="userdash/products.html">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="userdash/about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="userdash/contact.html">Contact Us</a>
              </li>
              <li class="nav-item">

                @if (Route::has('login'))


                    @auth
                      <a href="{{url('cart')}}" class="float-right"><i class="fa fa-shopping-cart" style="height: 30px; width: 30px;"></i>{{'$count'}}</a>

                      <x-app-layout>

                      </x-app-layout>
                  
                    
                    @else
                      <li><a class="nav-link" href="{{ route('login') }}" >Log in</a></li>

                      @if (Route::has('register'))
                        <li><a class="nav-link" href="{{ route('register') }}" >Register</a></li>
                      @endif

                    @endauth

                @endif

              </li>

            </ul>
          </div>
        </div>
      </nav>
    </header>

    @if(session()->has('msg'))

    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" >X</button>

        {{session('msg')}}
    </div>
    @endif
    <form>
    @csrf
    <table class="table">
        <thead>
            <tr>
                <td>Product Name</td>
                <td>Quantity</td>
                <td>Price</td>
                <td>Action</td>
            </tr>  
        </thead>
        
        
        <tbody>
            @foreach($data as $cart)
            <tr>
                <td>
                    <input type="text" name="productname[]" value="{{$cart->name}}" hidden="" />
                    {{$cart->name}}

                </td>
                <td>
                    <input type="text" name="quantity[]" value="{{$cart->quantity}}" hidden="" />
                    {{$cart->quantity}}

                </td>
                <td>
                    <input type="text" name="price[]" value="{{$cart->price}}" hidden="" />
                    {{$cart->price}}
                </td>
                <td> <a class="btn btn-danger" href="{{url('deletecart',$cart->id)}}" />Delete </td>
            </tr>
            @endforeach 
        </tbody>
        
        
    </table>
    <button type="submit" class="btn btn-success">Confirm</button>
    </form>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="userdash/assets/js/custom.js"></script>
    <script src="userdash/assets/js/owl.js"></script>
    <script src="userdash/assets/js/slick.js"></script>
    <script src="userdash/assets/js/isotope.js"></script>
    <script src="userdash/assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>