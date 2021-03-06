@extends('master')

@section('content')

      <div class="container-fluid productlist">
        <div class="row">
          <div class="col-sm-8">
            <a href="product1.html">
              <img src="img3/vase_1a.jpg" class="img-responsive" alt="item">
              <span class="productlist-price-container">
                <span class="product-price">
                  <span class="price">14.00</span>
                </span>
              </span>
            </a>
          </div>
          <div class="col-sm-4">
            <a href="product2.html">
              <img src="img3/vase_2a.jpg"  class="img-responsive" alt="item">
              <span class="productlist-price-container">
                <span class="product-price">
                  <span class="price">28.00</span>
                </span>
              </span>
            </a>
          </div>
          <div class="col-sm-4">
            <a href="product3.html">
              <img src="img3/vase_3a.jpg"  class="img-responsive" alt="item">
              <span class="productlist-price-container">
                <span class="product-price">
                  <span class="price">24.00</span>
                </span>
              </span>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 special">
            <div class="col-sm-12">
              <a href="product4.html">
                <img src="img3/vase_4a.jpg"  class="img-responsive" alt="item">
                <span class="productlist-price-container">
                  <span class="product-price">
                    <span class="price">16.00</span>
                  </span>
                </span>
              </a>
            </div>
            <div class="col-sm-12">
              <a href="product5.html">
                <img src="img3/vase_5a.jpg"  class="img-responsive" alt="item">
                <div class="productlist-label">
                  <span class="sale-label">Sale</span>
                </div>
                <span class="productlist-price-container">
                  <span class="product-price">
                    <span class="price">54.00</span>
                    <span class="original-price">
                      <span class="price">65.00</span>
                    </span>
                  </span>
                </span>
              </a>						
            </div>
          </div>
          <div class="col-sm-8">
            <a href="product6.html">
              <img src="img3/vase_6a.jpg" class="img-responsive" alt="item">
              <div class="productlist-label">
                <span class="sold-out-label">Sold Out</span>
              </div>
              <span class="productlist-price-container">
                <span class="product-price">
                  <span class="price">38.00</span>
                </span>
              </span>
            </a>
          </div>
        </div>
        <div class="row" id="more-items">
          <div class="col-sm-6">
            <a href="product7.html">
              <img src="img3/vase_7a.jpg"  class="img-responsive" alt="item">
              <span class="productlist-price-container">
                <span class="product-price">
                  <span class="price">17.00</span>
                </span>
              </span>
            </a>
          </div>
          <div class="col-sm-6">
            <a href="product8.html">
              <img src="img3/vase_8a.jpg"  class="img-responsive" alt="item">
              <span class="productlist-price-container">
                <span class="product-price">
                  <span class="price">21.00</span>
                </span>
              </span>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 text-center show-more">
            <a href="#" class="btn btn-outline" id="showmore">Show more</a>
          </div>	
        </div>	
      </div>

@endsection
