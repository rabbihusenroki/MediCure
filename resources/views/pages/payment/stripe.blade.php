@extends('layouts.app')

@section('content')
@include('layouts.menubar')

@php
$setting = DB::table('settings')->first();
$charge = $setting->shipping_charge;
$vat = $setting->vat;
$cart = Cart::Content();
@endphp


<style>
  /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
.StripeElement {
  box-sizing: border-box;

  height: 40px;
  width: 100%;

  padding: 10px 12px;

  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;

  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}

</style>




<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Pay Order Bill</h1>
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
                <div class="col-lg-8">
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
                                        <td class="cart-product-remove"><a href="{{ url('remove/cart/'.$row->rowId ) }}">x</a></td>
                                        <td class="cart-product-image">
                                            <a href="#"><img src="{{ asset($row->options->image) }}" alt="{{ asset($row->options->image) }}"></a>
                                        </td>
                                        <td class="cart-product-info">
                                            <h4><a href="product-details.html">{{ $row->name  }}</a></h4>
                                        </td>
                                        @if($row->options->size == NULL)
                                        @else
                                        <td class="cart-product-price">{{ $row->options->size }}</td>
                                        @endif
                                        <td class="cart-product-price">${{ $row->price }}</td>
                                        <td class="cart-product-quantity">${{ $row->qty }}</td>
                                        <td class="cart-product-subtotal">${{ $row->price*$row->qty }}</td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="shoping-cart-total mt-50" style="float: left; margin-top: -5px;">
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
                                    <td>Coupon : ({{ Session::get('coupon')['name'] }} )</td>
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
                <div class="col-lg-7">
                    <div class="contact_form_container" style="margin-top: 60px;
                    box-shadow: rgb(0 0 0 / 10%) 0px 4px 12px;
                    padding: 20px 20px;">
                        <div class="contact_form_title text-center">Payment Method</div>

                        <form action="{{ route('stripe.charge') }}" method="post" id="payment-form">
                            @csrf
                            <div class="form-row">
                                <label for="card-element">
                                    Credit or debit card
                                </label>
                                <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display form errors. -->
                                <div id="card-errors" role="alert"></div>
                            </div><br>

                            <input type="hidden" name="shipping" value="{{ $charge }} ">
                            <input type="hidden" name="vat" value="{{ $vat }} ">
                            <input type="hidden" name="total" value="{{ Cart::Subtotal() + $charge + $vat }} ">

                            <input type="hidden" name="ship_name" value="{{ $data['name'] }} ">
                            <input type="hidden" name="ship_phone" value="{{ $data['phone'] }} ">
                            <input type="hidden" name="ship_email" value="{{ $data['email'] }} ">
                            <input type="hidden" name="ship_address" value="{{ $data['address'] }} ">
                            <input type="hidden" name="ship_city" value="{{ $data['city'] }} ">
                            <input type="hidden" name="payment_type" value="{{ $data['payment'] }} ">
                             <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Pay Now</button>
                        </form>


                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- SHOPING CART AREA END -->





























 <script type="text/javascript">




 </script>








@endsection
