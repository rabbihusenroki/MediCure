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
                    <h1 class="page-title">Shipping Details</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->



    <!-- WISHLIST AREA START -->
    <div class="ltn__checkout-area mb-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__checkout-inner">
                        <div class="ltn__checkout-single-content mt-50">
                            <h4 class="title-2">Billing Details</h4>
                            <div class="ltn__checkout-single-content-info">
                                <form action="{{ route('payment.process') }}" id="contact_form" method="post">
                                    @csrf
                                    <h6>Personal Information</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input type="text" name="name" required="" placeholder="Full name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-email ltn__custom-icon">
                                                <input type="email" name="email" required="" placeholder="email address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-phone ltn__custom-icon">
                                                <input type="text" name="phone" required="" placeholder="phone number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <h6>Address</h6>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-item">
                                                        <input type="text" placeholder="House number and street name" name="address" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <h6>Town / City</h6>
                                            <div class="input-item">
                                                <input type="text" placeholder="City" name="city" required="">
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ltn__checkout-payment-method mt-50">
                        <h4 class="title-2">Payment Method</h4>
                        <div id="checkout_accordion_1">
                            <!-- card -->
                            <div class="card">
                                <h5 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2" aria-expanded="true">
                                    Cash on delivery
                                </h5>
                                <div id="faq-item-2-2" class="collapse show" data-bs-parent="#checkout_accordion_1">
                                    <div class="card-body">
                                        <p>Pay with cash upon delivery.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card">
                                <h5 data-bs-toggle="collapse" data-bs-target="#faq-item-2-3" aria-expanded="false" >
                                    {{-- <input type="radio" name="payment" value="stripe"> Stripe <img src="{{asset('img/icons/stripe.png')}}" alt="{{asset('img/icons/stripe.png')}}"> </li> --}}
                                    <li style="list-style: none;"><input type="radio" name="payment" value="stripe"> Stripe<img style="width: 110px;" src="{{asset('img/icons/stripe.png')}}" alt="{{asset('img/icons/stripe.png')}}"> </li>
                                </h5>
                                <div name="payment" value="stripe" id="faq-item-2-3" class="collapse" data-bs-parent="#checkout_accordion_1">
                                    <div class="card-body">
                                        <p>Pay via Stripe; its an easiest and safe way to purchase online.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ltn__payment-note mt-30 mb-30">
                            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                        </div>
                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Place order</button>
                    </div>
                </div>
            </form>

                <div class="col-lg-6">
                    <div class="shoping-cart-total mt-50">
                        <h4 class="title-2">Cart Totals</h4>
                        <table class="table">
                            <tbody>
                                @foreach($cart as $row)
                                <tr>
                                    <td>{{ $row->name  }} <strong>× {{ $row->qty }}</strong></td>
                                    <td>${{ $row->price }}</td>
                                </tr>
                                @endforeach
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
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- WISHLIST AREA START -->


















@endsection
