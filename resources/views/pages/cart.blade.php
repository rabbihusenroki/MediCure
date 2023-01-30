@extends('layouts.app')

@section('content')
@include('layouts.menubar')


    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Cart</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{url('/')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Cart</li>
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
                                        <form method="post" action="{{ route('update.cartitem') }}">
                                        @csrf
                                        
                                        <td class="cart-product-quantity">

                                          <input type="hidden" name="productid" value="{{ $row->rowId }}">
                                            <div class="cart-plus-minus">
                                                <input type="number" name="qty" min="1" max="{{$row->product_quantity}}" value="{{ $row->qty }}" class="cart-plus-minus-box">
                                            </div>
                                        </td>
                                       

                                        <td class="cart-product-subtotal">${{ $row->price*$row->qty }}</td>
                                    </tr>
                                    
                                    {{-- @endforeach --}}
                                    <tr class="cart-coupon-row">
                                        <td>
                                            <button type="submit" class="btn theme-btn-2 btn-effect-2-- enabled">Update Cart</button>
                                        </td>
                                    </tr>
                                    </form>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="shoping-cart-total mt-50">
                            <table class="table table-hover table-dark">
                                <thead>
                                  <tr>
                                    <th scope="col" colspan="2">Order Total</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Subtotal :</td>
                                    <td>${{ Cart::total() }}</td>
                                  </tr>
                                </tbody>
                              </table>


                            <div class="btn-wrapper text-right">
                                <a href="{{ route('user.checkout') }}" class="theme-btn-1 btn btn-effect-1">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOPING CART AREA END -->



























































@endsection
