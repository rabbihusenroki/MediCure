@extends('layouts.app')

@section('content')
@include('layouts.menubar')

@php
$setting = DB::table('settings')->first();
$charge = $setting->shipping_charge;
$vat = $setting->vat;
@endphp


<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Checkout</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{url('/')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->



    <!-- SHOPING CART AREA START -->
    <div class="liton__shoping-cart-area mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping-cart-inner">

                        <div class="shoping-cart-table table-responsive">
                            <table class="table">
                                <!-- <thead>
                                    <th class="cart-product-remove">Remove</th>
                                    <th class="cart-product-image">Image</th>
                                    <th class="cart-product-info">Product</th>
                                    <th class="cart-product-price">Price</th>
                                    <th class="cart-product-quantity">Quantity</th>
                                    <th class="cart-product-subtotal">Subtotal</th>
                                </thead> -->
                                <tbody>
                                    @foreach($cart as $row)
                                    <tr>
                                        <td class="cart-product-remove"><a style="border: 1px dotted red;padding: 1px 2px;" href="{{ url('remove/cart/'.$row->rowId ) }}">x</a></td>
                                        <td class="cart-product-image">
                                            <a href="#"><img src="{{ asset($row->options->image) }}" alt="{{ asset($row->options->image) }}"></a>
                                            <h4><a href="product-details.html">{{ $row->name  }}</a></h4>
                                        </td>
                                        <td class="cart-product-info">
                                            <h4><a href="product-details.html">{{ $row->name  }}</a></h4>
                                        </td>
                                        @if($row->options->size == NULL)
                                        @else
                                        <td class="cart-product-price">{{ $row->options->size }}</td>
                                        @endif
                                        <td class="cart-product-price">${{ $row->price }}</td>
                                        <form method="post" action="{{ route('update.cartitem') }}">
                                        @csrf
                                        <td class="cart-product-quantity">

                                          <input type="hidden" name="productid" value="{{ $row->rowId }}">
                                            <div class="cart-plus-minus">
                                                <input type="number" name="qty" value="{{ $row->qty }}" class="cart-plus-minus-box">
                                            </div>
                                        </td>


                                        <td class="cart-product-subtotal">${{ $row->price*$row->qty }}</td>
                                    </tr>

                                    
                                    <tr class="cart-coupon-row">
                                        <td>
                                            <button type="submit" class="btn theme-btn-2 btn-effect-2-- enabled">Update Cart</button>
                                        </td>
                                    </tr>
                                    </form>
                                    @endforeach
                                    <tr class="cart-coupon-row">



                                        <td colspan="6">

                                            <form method="post" action="{{ route('apply.coupon') }}">
                                                @csrf
                                            <div class="cart-coupon">
                                                <input type="text" name="coupon" required placeholder="Coupon code">
                                                <button type="submit" class="btn theme-btn-2 btn-effect-2">Apply Coupon</button>
                                            </div>
                                        </form>
                                        </td>

                                    </tr>

                                </tbody>

                            </table>
                        </div>

                        <div class="shoping-cart-total mt-50">

                            <table class="table table-hover table-dark">
                                <thead>
                                  <tr>
                                    <th scope="col" colspan="2">Cart Totals</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    @if(Session::has('coupon'))
                                    <td>Subtotal :</td>
                                    <td>${{ Session::get('coupon')['balance'] }}</td>
                                  </tr>
                                  <tr>
                                    <td>Coupon : ({{ Session::get('coupon')['name'] }} )
                                        <a style="border: 1px dotted red;padding: 1px 2px;" href="{{ route('coupon.remove') }}" class="cart-product-remove">X</a></td>
                                    <td>${{ Session::get('coupon')['discount'] }}</td>
                                  </tr>
                                  <tr>
                                    @else
                                    <td>Subtotal :</td>
                                    <td>${{  Cart::Subtotal() }}</td>
                                    @endif
                                  </tr>
                                  <tr>
                                    <td>Shiping Charge :</td>
                                    <td>${{ $charge  }}</td>
                                  </tr>
                                  <tr>
                                    <td>Vat :</td>
                                    <td>${{ $vat }}</td>
                                  </tr>
                                  <tr>
                                    @if(Session::has('coupon'))
                                    <td>Total :</td>
                                    <td>${{ Session::get('coupon')['balance'] + $charge + $vat }}</td>
                                  </tr>
                                  <tr>
                                    @else
                                    <td>Total :</td>
                                    <td>${{ Cart::Subtotal() + $charge + $vat }}</td>
                                    @endif
                                  </tr>


                                </tbody>
                              </table>
                            <div class="btn-wrapper text-right">
                                <a href="{{ route('payment.step') }}" class="theme-btn-1 btn btn-effect-1">Final Step</a>
                            </div>
                            <a style="background:#071c1f; margin-top: 20px;" href="{{ route('show.cart') }}" class="theme-btn-1 btn btn-effect-1">Back to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOPING CART AREA END -->



@endsection


