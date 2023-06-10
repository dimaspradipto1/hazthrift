@extends('layouts.frontend')

@section('content')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-text product-more">
          <a href="{{ asset('index') }}"><i class="fa fa-home"></i> Home</a>
          <span>Detail</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad page-details">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-6">
            <div class="product-pic-zoom">
              <img class="product-big-img" src="{{ $product->galleries()->exists() ? Storage::url($product->galleries->first()->url) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' }}" alt="" />
            </div>
            <div class="product-thumbs">
              <div class="product-thumbs-track ps-slider owl-carousel">
                @foreach ($product->galleries as $item )
                  <div class="pt {{ $loop->first ? 'active' : '' }}" data-imgbigurl="{{ Storage::url($item->url) }}">
                    <img src="{{ Storage::url($item->url) }}" alt="" />
                  </div>
                @endforeach
                

                {{-- <div class="pt" data-imgbigurl="img/mickey2.jpg">
                  <img src="{{ asset('/frontend/img/mickey2.jpg') }}" alt="" />
                </div>

                <div class="pt" data-imgbigurl="img/mickey3.jpg">
                  <img src="{{ asset('/frontend/img/mickey3.jpg') }}" alt="" />
                </div>

                <div class="pt" data-imgbigurl="img/mickey4.jpg">
                  <img src="{{ asset('/frontend/img/mickey4.jpg') }}" alt="" />
                </div> --}}
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="product-details">
              <div class="pd-title">
                <span>oranges</span>
                <h3>{{ $product->name }}</h3>
              </div>
              <div class="pd-desc">
                <p>
                  {!! $product->description !!}
                </p>
                
                <h4>IDR {{ number_format($product->price) }}</h4>
              </div>
              <div class="quantity">
                <a href="shopping-cart.html" class="primary-btn pd-cart">Add To Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Product Shop Section End -->

<!-- Related Products Section End -->
<div class="related-products spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h2>Related Products</h2>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach ($recommendations as $recommendation)
        <div class="col-lg-3 col-sm-6">
          <div class="product-item">
            <div class="pi-pic">
              <img src="{{ $recommendation->galleries()->exists() ? Storage::url($recommendation->galleries->first()->url) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' }}" alt="" />
              <ul>
                <li class="w-icon active">
                  <a href="{{ route('details', $recommendation->slug) }}"><i class="icon_bag_alt"></i></a>
                </li>
                <li class="quick-view"><a href="{{ route('details', $recommendation->slug) }}">+ Quick View</a></li>
              </ul>
            </div>
            <div class="pi-text">
              {{-- <div class="catagory-name">Coat</div> --}}
              <a href="#">
                <h5>{{ $recommendation->name }}</h5>
              </a>
              <div class="product-price">
               IDR {{ number_format($recommendation->price) }}
              </div>
            </div>
          </div>
        </div>
      @endforeach
      

      {{-- <div class="col-lg-3 col-sm-6">
        <div class="product-item">
          <div class="pi-pic">
            <img src="{{ asset('/frontend/img/products/women-2.jpg') }}" alt="" />
            <ul>
              <li class="w-icon active">
                <a href="#"><i class="icon_bag_alt"></i></a>
              </li>
              <li class="quick-view"><a href="#">+ Quick View</a></li>
            </ul>
          </div>
          <div class="pi-text">
            <div class="catagory-name">Shoes</div>
            <a href="#">
              <h5>Guangzhou sweater</h5>
            </a>
            <div class="product-price">
              $13.00
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="product-item">
          <div class="pi-pic">
            <img src="{{ asset('/frontend/img/products/women-3.jpg') }}" alt="" />
            <ul>
              <li class="w-icon active">
                <a href="#"><i class="icon_bag_alt"></i></a>
              </li>
              <li class="quick-view"><a href="#">+ Quick View</a></li>
            </ul>
          </div>
          <div class="pi-text">
            <div class="catagory-name">Towel</div>
            <a href="#">
              <h5>Pure Pineapple</h5>
            </a>
            <div class="product-price">
              $34.00
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="product-item">
          <div class="pi-pic">
            <img src="{{ asset('/frontend/img/products/women-4.jpg') }}" alt="" />
            <ul>
              <li class="w-icon active">
                <a href="#"><i class="icon_bag_alt"></i></a>
              </li>
              <li class="quick-view"><a href="#">+ Quick View</a></li>
            </ul>
          </div>
          <div class="pi-text">
            <div class="catagory-name">Towel</div>
            <a href="#">
              <h5>Converse Shoes</h5>
            </a>
            <div class="product-price">
              $34.00
            </div>
          </div>
        </div>
      </div> --}}

    </div>
  </div>
</div>
<!-- Related Products Section End -->
@endsection