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
                      <td class="delete-item"><a href="#"><i class="material-icons">
                            close
                          </i></a></td>
                    </tr>
                  @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
          {{-- <div class="col-lg-8">
            <h4 class="mb-4">
              Informasi Pembeli:
            </h4>
            <div class="user-checkout">
              <form>
                <div class="form-group">
                  <label for="namaLengkap">Nama lengkap</label>
                  <input type="text" class="form-control" id="namaLengkap" aria-describedby="namaHelp"
                    placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                  <label for="namaLengkap">Email Address</label>
                  <input type="email" class="form-control" id="emailAddress" aria-describedby="emailHelp"
                    placeholder="Masukan Email">
                </div>
                <div class="form-group">
                  <label for="namaLengkap">No. HP</label>
                  <input type="text" class="form-control" id="noHP" aria-describedby="noHPHelp"
                    placeholder="Masukan No. HP">
                </div>
                <div class="form-group">
                  <label for="alamatLengkap">Alamat Lengkap</label>
                  <textarea class="form-control" id="alamatLengkap" rows="3"></textarea>
                </div>
              </form>
            </div>
          </div> --}}

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
              <form>
                <div class="form-group">
                  <label for="namaLengkap">Nama lengkap</label>
                  <input type="text" name="name" class="form-control" id="namaLengkap" aria-describedby="namaHelp"
                    placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                  <label for="namaLengkap">Email Address</label>
                  <input type="email" name="email" class="form-control" id="emailAddress" aria-describedby="emailHelp"
                    placeholder="Masukan Email">
                </div>
                <div class="form-group">
                  <label for="alamatLengkap">Alamat Lengkap</label>
                  <textarea name="address	" class="form-control" id="alamatLengkap" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label for="namaLengkap">No. HP</label>
                  <input type="number" name="phone" class="form-control" id="noHP" aria-describedby="noHPHelp"
                    placeholder="Masukan No. HP">
                </div>
              </form>
              
                {{-- <li class="subtotal">ID Transaction <span>#SH12000</span></li>
                <li class="subtotal mt-3">Subtotal <span>$240.00</span></li>
                <li class="subtotal mt-3">Pajak <span>10%</span></li>
                <li class="subtotal mt-3">Total Biaya <span>$440.00</span></li>
                <li class="subtotal mt-3">Bank Transfer <span>Mandiri</span></li>
                <li class="subtotal mt-3">No. Rekening <span>2208 1996 1403</span></li>
                <li class="subtotal mt-3">Nama Penerima <span>Shayna</span></li> --}}
              </ul>
              <a href="success.html" class="proceed-btn">I ALREADY PAID</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Shopping Cart Section End -->
@endsection