@extends('layouts.app')

@section('content')
@include('layouts.menubar')

@php
$category = DB::table('categories')->get();
//Popular Product
$popular = DB::table('products')->where('status',1)->orderBy('product_views','desc')->limit(3)->get();
@endphp




<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="img/bg/14.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">{{$category_name->category_name}}</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ url('/') }}"><span class="ltn__secondary-color"><i
                                            class="fas fa-home"></i></span> Home</a></li>
                            <li>{{$category_name->category_name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->



<!-- PRODUCT DETAILS AREA START -->
<div class="ltn__product-area ltn__product-gutter mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-lg-2 mb-120">
                <div class="ltn__shop-options">
                    <ul>
                        <li>
                            <div class="ltn__grid-list-tab-menu ">
                                <div class="nav">
                                    <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i
                                            class="fas fa-th-large"></i></a>
                                    <a data-bs-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                                </div>
                            </div>
                        </li>
                        {{-- <li>
                            <div class="showing-product-number text-right">
                                <span>Showing 1–12 of 18 results</span>
                            </div>
                        </li>
                        <li>
                            <div class="short-by text-center">
                                <select class="nice-select">
                                    <option>Default Sorting</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by new arrivals</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                            </div>
                        </li> --}}
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="liton_product_grid">
                        <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                            <div class="row">
                                <!-- ltn__product-item -->
                                @foreach($category_all as $product)
                                <div class="col-xl-4 col-sm-6 col-6">
                                    <div class="ltn__product-item ltn__product-item-3 text-center">
                                        <div class="product-img">
                                            <a href="{{ url('product/details/'.$product->id.'/'.$product->product_name) }}"><img src="{{ asset($product->image_one) }}" alt="#"></a>
                                            <div class="product-badge">
                                                <ul>
                                                    @if($product->discount_price == NULL)
                                                    <li class="sale-badge">New</li>
                                                     @else
                                                    <li class="sale-badge">
                                                    @php
                                                    $amount = $product->selling_price - $product->discount_price;
                                                    $discount = $amount/$product->selling_price*100;
                                                    @endphp

                                                    {{ intval($discount) }}%
                                                    </li>
                                                    @endif
                                                </ul>
                                            </div>
                                            <div class="product-hover-action">
                                                <ul>

                                                    <li>

                                                        <a data-id="{{ $product->id }}" class="addcarts" href="" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                            <i class="fas fa-shopping-cart"></i>
                                                        </a>

                                                    </li>

                                                    <li>
                                                        <a class="addwishlist" data-id="{{ $product->id }}" title="Wishlist">
                                                            <i class="far fa-heart"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            {{-- <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                </ul>
                                            </div> --}}
                                            <h2 class="product-title"><a href="{{ url('product/details/'.$product->id.'/'.$product->product_name) }}">{{ $product->product_name }}</a></h2>
                                            <div class="product-price">
                                                @if($product->discount_price == NULL)
                                                <span>${{ $product->selling_price }}</span>
                                                @else
                                                <del>${{ $product->selling_price }}</del> <span>${{ $product->discount_price }}</span>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="liton_product_list">
                        <div class="ltn__product-tab-content-inner ltn__product-list-view">
                            <div class="row">
                                <!-- ltn__product-item -->
                                @foreach($category_all as $product)
                                <div class="col-lg-12">
                                    <div class="ltn__product-item ltn__product-item-3">
                                        <div class="product-img">
                                            <a href="{{ url('product/details/'.$product->id.'/'.$product->product_name) }}"><img src="{{ asset($product->image_one) }}" alt="#"></a>
                                            <div class="product-badge">
                                                <ul>
                                                    @if($product->discount_price == NULL)
                                                    <li class="sale-badge">New</li>
                                                     @else
                                                    <li class="sale-badge">
                                                    @php
                                                    $amount = $product->selling_price - $product->discount_price;
                                                    $discount = $amount/$product->selling_price*100;
                                                    @endphp

                                                    {{ intval($discount) }}%
                                                    </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h2 class="product-title"><a href="{{ url('product/details/'.$product->id.'/'.$product->product_name) }}">{{ $product->product_name }}</a></h2>
                                            </h2>
                                            {{-- <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                </ul>
                                            </div> --}}
                                            <div class="product-price">
                                                @if($product->discount_price == NULL)
                                                <span>${{ $product->selling_price }}</span>
                                                @else
                                                <del>${{ $product->selling_price }}</del> <span>${{ $product->discount_price }}</span>
                                                @endif
                                            </div>
                                            <div class="product-brief">
                                                <p>{{Str::limit($product->product_details,113)}}
                                                </p>
                                            </div>
                                            <div class="product-hover-action">
                                                <ul>
                                                    <li>

                                                        <a data-id="{{ $product->id }}" class="addcarts" href="" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                            <i class="fas fa-shopping-cart"></i>
                                                        </a>

                                                    </li>

                                                    <li>
                                                        <a class="addwishlist" data-id="{{ $product->id }}" title="Wishlist">
                                                            <i class="far fa-heart"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- ltn__product-item -->
                            </div>
                        </div>
                    </div>
                </div>
                {{ $category_all->links() }}

            </div>
            <div class="col-lg-4  mb-120">
                <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                    <!-- Category Widget -->
                    <div class="widget ltn__menu-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Product categories</h4>
                        <ul>
                            @foreach($category as $cat)
                            <li><a href="{{ url('allcategory/'.$cat->id) }}">{{ $cat->category_name }}<span>
                                <i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                @endforeach
                        </ul>
                    </div>
                    <!-- Price Filter Widget -->
                    {{-- <div class="widget ltn__price-filter-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Filter by price</h4>
                        <div class="price_filter">
                            <div class="price_slider_amount">
                                <input type="submit" value="Your range:" />
                                <input type="text" class="amount" name="price" placeholder="Add Your Price" />
                            </div>
                            <div class="slider-range"></div>
                        </div>
                    </div> --}}
                    <!-- Top Rated Product Widget -->
                    <div class="widget ltn__top-rated-product-widget" style="overflow: hidden">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Top Views Product</h4>

                        <ul>
                            @foreach($popular as $row)
                            <li>
                                <div class="top-rated-product-item clearfix">
                                    <div class="top-rated-product-img">
                                        <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"><img src="{{ asset( $row->image_one )}}" alt="{{ asset( $row->image_one )}}"></a>
                                    </div>
                                    <div class="top-rated-product-info">

                                        <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}">{{ $row->product_name }}</a>
                            <h2 class="product-title"><a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"><i class="far fa-eye"></i> {{ $row->product_views }}</a></h2>
                            <div class="product-price">
                                @if($row->discount_price == NULL)
                                <span>${{ $row->selling_price }}</span>
                                @else
                                <del>${{ $row->selling_price }}</del> <span>${{ $row->discount_price }}</span>
                                @endif

                            </div>
                                    </div>
                                </div>
                            </li>

                            @endforeach
                        </ul>
                    </div>
                    <!-- Search Widget -->
                   
                    {{-- <div class="widget ltn__search-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Search Objects</h4>
                        
                        <form method="post" action="{{ route('product.search') }}">
                            @csrf
                            <input type="text" name="search" value="" placeholder="Search for products (e.g. eggs, milk, potato)">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div> --}}
                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget">
                        <a href="#"><img src="{{ asset( 'img/banner/banner-2.jpg' )}}" alt="{{ asset( 'img/banner/banner-2.jpg' )}}"></a>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT DETAILS AREA END -->


















    <!-- MODAL AREA START (Add To Cart Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                         <div class="modal-product-info">
                                            <h5 id="pname"></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Cart</p>
                                            <div class="btn-wrapper">
                                                <a href="{{ route('show.cart') }}" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                                                @guest
                                                @else
                                                <a href="{{ route('user.checkout') }}" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                                @endguest
                                            </div>
                                         </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img id="pimage" src="" alt="Medicure">
                                            </div>
                                         </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->









































    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script type="text/javascript">
    function productview(id){
        $.ajax({
         url: "{{ url('/cart/product/view/') }}/"+id,
         type: "GET",
         dataType:"json",
         success:function(data){
       $('#pcode').text(data.product.product_code);
       $('#psell').text(data.product.selling_price).prepend('$');
       $('#pdis').text(data.product.discount_price);
       $('#pcat').text(data.product.category_name);
       $('#psub').text(data.product.subcategory_name);
       $('#pbrand').text(data.product.brand_name);
       $('#pname').text(data.product.product_name);
       $('#pimage').attr('src',data.product.image_one);
       $('#product_id').val(data.product.id);

       var d = $('select[name="color"]').empty();
       $.each(data.color,function(key,value){
       $('select[name="color"]').append('<option value="'+value+'">'+value+'</option>');
        });

          var d = $('select[name="size"]').empty();
       $.each(data.size,function(key,value){
       $('select[name="size"]').append('<option value="'+value+'">'+value+'</option>');
        });


         }
        })
    }


</script>


<script type="text/javascript">

   $(document).ready(function(){
     $('.addwishlist').on('click', function(){
        var id = $(this).data('id');
        if (id) {
            $.ajax({
                url: " {{ url('add/wishlist/') }}/"+id,
                type:"GET",
                datType:"json",
                success:function(data){
             const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000,
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
