<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          @foreach($products as $product)
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="/productimage/{{ $product->image }}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>{{ $product->name }}</h4></a>
                <h6>KES{{ $product->price }}</h6>
                <p>{{ $product->description }}</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (32)</span>
              </div>
            </div>
          </div>
          @endforeach

          <div class="d-flex justify-content-center">
            {!! $products->links() !!}
          </div>
        </div>
      </div>
    </div>