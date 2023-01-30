@extends('layouts.app')

@section('content')
@include('layouts.menubar')

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Wishlist</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{url('/')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Your Wishlist Products</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->





    <!-- WISHLIST AREA START -->
    <div class="liton__wishlist-area mb-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping-cart-inner">
                        <div class="shoping-cart-table table-responsive">
                            <table class="table">
                                <!-- <thead>
                                    <th class="cart-product-remove">X</th>
                                    <th class="cart-product-image">Image</th>
                                    <th class="cart-product-info">Title</th>
                                    <th class="cart-product-price">Price</th>
                                    <th class="cart-product-quantity">Quantity</th>
                                    <th class="cart-product-subtotal">Subtotal</th>
                                </thead> -->
                                <tbody>
                                    @foreach($product as $row)
                                    <tr>
                                        <td class="cart-product-remove"><a href="{{url('wishlist-delete/'.$row->id)}}">x</a></td>
                                        <td class="cart-product-image">
                                            <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"><img src="{{ asset($row->image_one) }}" alt="{{ asset($row->image_one) }}"></a>
                                        </td>
                                        <td class="cart-product-info">
                                            <h4><a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}">{{ $row->product_name  }}</a></h4>
                                        </td>
                                        @if($row->product_size == NULL)

                                        @else
                                        <td class="cart-product-price">{{ $row->product_size }}</td>
                                        @endif
                                        @if($row->discount_price == NULL)
                                        <td class="cart-product-price">${{ $row->selling_price }}</td>
                                        @else
                                        <td class="cart-product-price">${{ $row->discount_price }}</td>
                                        @endif
                                        <td class="cart-product-add-cart">

                                            @if($row->product_quantity > 0)
                                                <a data-id="{{ $row->id }}" class="addcarts" href="" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                    <i class="fas fa-shopping-cart"></i>
                                            </a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- WISHLIST AREA START -->




    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>





<script type="text/javascript">

    $(document).ready(function(){
      $('.addcarts').on('click', function(){
         var id = $(this).data('id');
         if (id) {
             $.ajax({
                 url: " {{ url('/add/to/cart/') }}/"+id,
                 type:"GET",
                 datType:"json",
                 success:function(data){
              const Toast = Swal.mixin({
                   toast: true,
                   position: 'top-end',
                   showConfirmButton: false,
                   timer: 2000,
                   timerProgressBar: true,
                   onOpen: (toast) => {
                     toast.addEventListener('mouseenter', Swal.stopTimer)
                     toast.addEventListener('mouseleave', Swal.resumeTimer)
                   }
                 })
 
              if ($.isEmptyObject(data.error)) {
 
                 Toast.fire({
                   icon: 'success',
                   title: data.success
                 })
              }else{
                  Toast.fire({
                   icon: 'error',
                   title: data.error
                 })
              }
 
 
                 },
             });
 
         }else{
             alert('danger');
         }
      });
 
    });
 
 
 </script>

@endsection
