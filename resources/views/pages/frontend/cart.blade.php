@extends('layouts.frontend')

@section('content')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-text product-more">
          <a href="./home.html"><i class="fa fa-home"></i> Home</a>
          <span>Shopping Cart</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="row">
          <div class="col-lg-12">
            <div class="cart-table">
              <table>
                <thead>
                  <tr>
                    <th>Image</th>
                    <th class="p-name text-center">Product Name</th>
                    <th>Price</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($carts as $item)
                    <tr>
                      <td class="cart-pic first-row">
                        <img src="{{ $item->product->galleries()->exists() ? Storage::url($item->product->galleries->first()->url) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' }}" />
                      </td>
                      <td class="cart-title first-row text-center">
                        <h5>{{ $item->product->name }}</h5>
                      </td>
                      <td class="p-price first-row">IDR {{ number_format($item->product->price) }}</td>
                      <td class="delete-item">

                        <form action="{{ route('cart-delete', $item->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          
                          <button type="submit"><i class="material-icons">
                            close
                          </i></button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="row">
          <div class="col-lg-12">
            <div class="proceed-checkout">
              <h4 class="mb-4">
                Informasi Pembeli:
              </h4>
              <ul>

                <form action="{{ route('checkout') }}" method="POST">
                  @csrf
           
                  <div class="flex flex-col mb-4">
                    <label for="complete-name" class="text-sm mb-2">Nama lengkap</label>
                    <input data-input type="text" id="complete-name" name="name"
                      class="form-control"
                      placeholder="masukkan nama" />
                  </div>
      
                  <div class="flex flex-col mb-4">
                    <label for="email" class="text-sm mb-2">Email Address</label>
                    <input data-input type="email" id="email" name="email"
                      class="form-control"
                      placeholder="masukkan email" />
                  </div>
      
                  <div class="flex flex-col mb-4">
                    <label for="address" class="text-sm mb-2">Address</label>
                    <input data-input type="text" id="address"  name="address"
                      class="form-control"
                      placeholder="masukkan alamat" />
                  </div>
      
                  <div class="flex flex-col mb-4">
                    <label for="phone-number" class="text-sm mb-2">Phone Number</label>
                    <input data-input type="tel" id="phone-number" name="phone"
                      class="form-control"
                      placeholder="masukkan no hp" />
                  </div>

    
                  <div class="text-center">
                    <button type="submit" 
                      class="proceed-btn btn-block">
                      Checkout Now
                    </button>
                  </div>
                </form>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Shopping Cart Section End -->
@endsection