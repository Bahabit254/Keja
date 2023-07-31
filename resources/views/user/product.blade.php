<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
              <form action="{{url('searchbar')}}" method="get" class="form-inline float-right p-10">
                @csrf
                <input class="form-control" type="search" name="search" placeholder="Search item"/>
                <input class="btn btn-primary" type="submit" value="search" />
              </form>
            </div>
            
          </div>

          @foreach($products as $product)

          <div class="col-md-6">
            <div class="product-item">
              <a href="#"><img src="/productimage/{{ $product->image }}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>{{ $product->name }}</h4></a>
                <h6>KES{{ $product->price }}</h6>
                <p>{{ $product->description }}</p>
                @if(session()->has('msg'))
                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ session('msg') }}
                </div>
                @endif
                <form action="{{url('addCart', $product->id)}}" method="post">
                  @csrf
                  <input class="form-control" style="width: 50px;" type="number" min="1" value="1"/>
                  <br/>
                  <input class="btn btn-primary" type="submit" value="Add to Cart" />
                </form>
              </div>
            </div>
          </div>
          
          @endforeach

          @if(method_exists($products, 'links'))
          <div class="d-flex justify-content-center">
            {!! $products->links() !!}
          </div>
          @endif
        </div>
      </div>
    </div>