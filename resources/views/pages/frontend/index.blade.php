@extends('layouts.frontend')

@section('content')
  <!-- Hero Section Begin -->
  <section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="{{ asset('/frontend/img/hero-1.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Bag,kids</span>
                        <h1>Black friday</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        </p>
                        <a href="#" class="primary-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero-items set-bg" data-setbg="{{ asset('/frontend/img/hero-2.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Bag,kids</span>
                        <h1>Black friday</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        </p>
                        <a href="#" class="primary-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Women Banner Section Begin -->
<section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="product-slider owl-carousel">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ asset('/frontend/img/mickey1.jpg') }}" alt="" />
                            <ul>
                                <li class="w-icon active">
                                    <a href="#"><i class="icon_bag_alt"></i></a>
                                </li>
                                <li class="quick-view"><a href="product.html">+ Quick View</a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Coat</div>
                            <a href="#">
                                <h5>Mickey Baggy</h5>
                            </a>
                            <div class="product-price">
                                $14.00
                                <span>$35.00</span>
                            </div>
                        </div>
                    </div>
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
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ asset('/frontend/img/products/women-4.jpg') }}" alt="" />
                            <ul>
                                <li class="w-icon active">
                                    <a href="#"><i class="icon_bag_alt"></i></a>
                                </li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon">
                                    <a href="#"><i class="fa fa-random"></i></a>
                                </li>
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
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Women Banner Section End -->

<!-- Instagram Section Begin -->
<div class="instagram-photo">
    <div class="insta-item set-bg" data-setbg="{{ asset('/frontend/img/insta-1.jpg') }}">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">shayna_gallery</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="{{ asset('/frontend/img/insta-2.jpg') }}">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">shayna_gallery</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="{{ asset('/frontend/img/insta-3.jpg') }}">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">shayna_gallery</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="{{ asset('/frontend/img/insta-4.jpg') }}">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">shayna_gallery</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="{{ asset('/frontend/img/insta-5.jpg') }}">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">shayna_gallery</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="{{ asset('/frontend/img/insta-6.jpg') }}">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">shayna_gallery</a></h5>
        </div>
    </div>
</div>
<!-- Instagram Section End -->

<!-- Partner Logo Section Begin -->
<div class="partner-logo">
    <div class="container">
        <div class="logo-carousel owl-carousel">
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="{{ asset('/frontend/img/logo-carousel/logo-1.png') }}" alt="" />
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="{{ asset('/frontend/img/logo-carousel/logo-2.png') }}" alt="" />
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="{{ asset('/frontend/img/logo-carousel/logo-3.png') }}" alt="" />
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="{{ asset('/frontend/img/logo-carousel/logo-4.png') }}" alt="" />
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="{{ asset('/frontend/img/logo-carousel/logo-5.png') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partner Logo Section End -->
@endsection