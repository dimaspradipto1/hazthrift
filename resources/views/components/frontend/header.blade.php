  <!-- Header Section Begin -->
  <header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="ht-left">
          <div class="mail-service">
            <i class=" fa fa-envelope"></i> hello.hazthrift@gmail.com
          </div>
          <div class="phone-service">
            <i class=" fa fa-phone"></i> +628 12 6214 9752
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="inner-header">
        <div class="row">
          <div class="col-lg-2 col-md-2">
            <div class="logo">
              <a href="{{ route('index') }}">
                <img width="100" height="100" src="{{ url('/frontend/img/logohaz.jpg') }}" alt="" />
              </a>
            </div>
          </div>
          <div class="col-lg-7 col-md-7"></div>
          <div class="col-lg-3 text-right col-md-3">
            <ul class="nav-right">
              <li class="cart-icon">
                Keranjang Belanja &nbsp;
                <a href="#">
                  <i class="icon_bag_alt"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="nav-item">
      <div class="container">

        <nav class="nav-menu mobile-menu">
          <ul>
            <li class="active"><a href="/">Home</a></li>
            <li><a href="shop.html">Shop</a></li>
            <li>
              <a href="#">Collection</a>
              <ul class="dropdown">
                <li><a href="#">Men's</a></li>
                <li><a href="#">Women's</a></li>
                <li><a href="#">Kid's</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>

            @auth
              <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
            @endauth

            @guest
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
            @endguest
          </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
      </div>
    </div>
  </header>
  <!-- Header End -->
