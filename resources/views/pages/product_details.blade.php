@extends('layouts.app')

@section('content')
@include('layouts.menubar')


 <!-- BREADCRUMB AREA START -->
 <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image"  data-bs-bg="img/bg/14.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Product Details</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{url('/')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li><a href="{{ url('allcategory/'.$product->category_id) }}"> {{ $product->category_name }}</a></li>
                            <li><a href="{{ url('products/'.$product->id) }}">{{ $product->subcategory_name }}</a></li>
                            <li>{{ $product->product_name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->






    <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="ltn__shop-details-inner mb-60">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="ltn__shop-details-img-gallery">
                                    <div class="ltn__shop-details-large-img">
                                        <div class="single-large-img">
                                            <a href="{{ asset( $product->image_one ) }}" data-rel="lightcase:myCollection">
                                                <img src="{{ asset( $product->image_one ) }}" alt="{{ asset( $product->image_two ) }}">
                                            </a>
                                        </div>
                                        <div class="single-large-img">
                                            <a href="{{ asset( $product->image_two ) }}" data-rel="lightcase:myCollection">
                                                <img src="{{ asset( $product->image_two ) }}" alt="{{ asset( $product->image_two ) }}">
                                            </a>
                                        </div>
                                        <div class="single-large-img">
                                            <a href="{{ asset( $product->image_three ) }}" data-rel="lightcase:myCollection">
                                                <img src="{{ asset( $product->image_three ) }}" alt="{{ asset( $product->image_three ) }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ltn__shop-details-small-img slick-arrow-2">
                                        <div class="single-small-img">
                                            <img src="{{ asset( $product->image_one ) }}" alt="{{ asset( $product->image_one ) }}">
                                        </div>
                                        <div class="single-small-img">
                                            <img src="{{ asset( $product->image_two ) }}" alt="{{ asset( $product->image_two ) }}">
                                        </div>
                                        <div class="single-small-img">
                                            <img src="{{ asset( $product->image_three ) }}" alt="{{ asset( $product->image_three ) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-product-info shop-details-info pl-0">
                                    <div class="product-ratting" style="margin-bottom: 10px;">
                                        {{-- @if($product->product_quantity >=1)
                                        <span>☀️Stock :</span> <span style="padding: 6px;
                                        background: #ffffff;
                                        border-radius: 25%;
                                        box-sizing: border-box;
                                        box-shadow: rgb(45 255 31 / 25%) 0px 2px 5px -1px, rgb(0 0 0 / 30%) 0px 1px 3px -1px;
                                        font-weight: 600;
                                        color: #3f9f95;">In Stock</span>
                                        @else
                                        <span>☀️Stock :</span> <span style="padding: 6px;
                                        background: #ffffff;
                                        border-radius: 25%;
                                        box-sizing: border-box;
                                        box-shadow: rgb(45 255 31 / 25%) 0px 2px 5px -1px, rgb(0 0 0 / 30%) 0px 1px 3px -1px;
                                        font-weight: 600;
                                        color: #3f9f95;">Out of Stock</span>
                                        @endif --}}
                                        @if($product->product_quantity > 0)
                                        <span>☀️Stock :</span> <span style="padding: 6px;
                                        background: #ffffff;
                                        border-radius: 25%;
                                        box-sizing: border-box;
                                        box-shadow: rgb(45 255 31 / 25%) 0px 2px 5px -1px, rgb(0 0 0 / 30%) 0px 1px 3px -1px;
                                        font-weight: 600;
                                        color: #3f9f95;">{{$product->product_quantity}}</span>
                                        @else

                                        <span>☀️Stock :</span> <span style="padding: 6px;
                                        background: #ffffff;
                                        border-radius: 25%;
                                        box-sizing: border-box;
                                        box-shadow: rgb(45 255 31 / 25%) 0px 2px 5px -1px, rgb(0 0 0 / 30%) 0px 1px 3px -1px;
                                        font-weight: 600;
                                        color: #3f9f95;">Out of Stock</span>


                                        @endif
                                    </div>
                                    <h3>{{ $product->product_name }}</h3>
                                    <div class="product-price">
                                        @if($product->discount_price == NULL)
                                        <span>${{ $product->selling_price }}</span>
                                        @else
                                        <span>${{ $product->discount_price }}</span><del>${{ $product->selling_price }}</del>
                                        @endif
                                    </div>
                                    <div class="modal-product-meta ltn__product-details-menu-1">
                                        <ul>
                                            <li>
                                                <strong>Brand:</strong>
                                                <span>
                                                    <a href="#">{{ $product->brand_name }}</a>
                                                </span>
                                            </li>
                                            <li>
                                                <strong>Categories:</strong>
                                                <span>
                                                    <a href="{{ url('allcategory/'.$product->category_id) }}">{{ $product->category_name }}</a>
                                                </span>
                                            </li>

                                            <li>
                                                <strong>SKU:</strong>
                                                <span>
                                                    <a href="">{{$product->product_code}}</a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <form action="{{ url('cart/product/add/'.$product->id) }}" method="post">
                                    @csrf
                                    <div class="ltn__product-details-menu-2" style="display:table;">
                                    <div>
                                        <span style="display: block;
                                        text-align: start;
                                        font-family: ui-serif;
                                        font-weight: 600;">Color</span>
                                        <select name="color">
                                        @foreach($product_color as $color)
                                        <option value="{{ $color }}">{{ $color }}</option>   
                                        @endforeach
                                        </select>

                                    </div>
                                    <div>
                                        <span style="display: block;
                                        text-align: start;
                                        font-family: ui-serif;
                                        font-weight: 600;">Size</span>
                                         <select data-default-text="Please select" name="size">
                                         @foreach($product_size as $size)
                                          <option value="{{ $size }}">{{ $size }}</option>
                                         @endforeach
                                         </select>

                                    </div>


                                    </div>
                                    <div class="ltn__product-details-menu-2">
                                        <ul>
                                            <li>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="number" min="1" max="{{$product->product_quantity}}" value="1"  name="qty">
                                                </div>
                                            </li>
                                            @if($product->product_quantity > 0)
                                            <button type="submit" class="theme-btn-1 btn btn-effect-1"><i class="fas fa-shopping-cart"></i>
                                                <span>ADD TO CART</span></button>
                                             @endif   
                                        </ul>

                                    </div>

                                    <div class="ltn__product-details-menu-3">
                                        <ul>
                                            <li>
                                                <a href="#" data-id="{{ $product->id }}" class="addwishlist" title="Wishlist">
                                                    <i class="far fa-heart"></i>
                                                    <span>Add to Wishlist</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="ltn__social-media">
                                        <ul>
                                            <li>Share:</li>
                                       </ul>
                                       <div class="addthis_inline_share_toolbox"></div>
                                    </div>
                                </form>
                                    <hr>
                                    <div class="ltn__safe-checkout">
                                        <h5>Guaranteed Safe Checkout</h5>
                                        <img src="{{asset('img/icons/payment-2.png')}}" alt="{{asset('img/icons/payment-2.png')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Tab Start -->
                    <div class="ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2">
                        <div class="ltn__shop-details-tab-menu">
                            <div class="nav">
                                <a class="active show" data-bs-toggle="tab" href="#liton_tab_details_1_1">Description</a>
                                <a data-bs-toggle="tab" href="#liton_tab_details_1_2" class="">Video</a>
                                <a data-bs-toggle="tab" href="#liton_tab_details_1_2_3" class="">Comments</a>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                                <div class="ltn__shop-details-tab-content-inner">
                                    <h4 class="title-2">{!! $product->product_name !!}</h4>
                                    <p>{!! $product->product_details !!}</p>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="liton_tab_details_1_2">
                                <div class="ltn__shop-details-tab-content-inner">
                                    <h4 class="title-2">Product Video</h4>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $product->video_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <hr>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="liton_tab_details_1_2_3">
                                <div class="ltn__shop-details-tab-content-inner">
                                    <h4 class="title-2">Please give your feedback</h4>
                                    <div class="fb-comments" data-href="{{ Request::url() }}" data-width="" data-numposts="5"></div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Tab End -->
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                        <!-- Top Rated Product Widget -->
                        @php
                            //Popular Product
                        $popular = DB::table('products')->where('status',1)->orderBy('product_views','desc')->limit(5)->get();
                        @endphp
                        <div class="widget ltn__top-rated-product-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Top Views Product</h4>
                            <ul>
                                @foreach($popular as $row)
                                <li>
                                    <div class="top-rated-product-item clearfix">
                                        <div class="top-rated-product-img">
                                            <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"><img src="{{ asset( $row->image_one )}}" alt="#"></a>
                                        </div>
                                        <div class="top-rated-product-info">

                                            <h6><a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}">{{ $row->product_name }}</a></h6>
                                            <div class="product-price">
                                                @if($row->discount_price == NULL)
                                                <span>${{ $row->selling_price }}</span>
                                                @else
                                                <span>${{ $row->discount_price }}</span><del>${{ $row->selling_price }}</del>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget">
                            <a href="{{route('shop')}}"><img src="{{asset('img/banner/2.jpg')}}" alt="#"></a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->











    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area ltn__product-gutter pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2">
                        <h4 class="title-2">Related Products<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__related-product-slider-one-active slick-arrow-1">
                <!-- ltn__product-item -->
                @foreach($related_product as $row)
                <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-3 text-center">
                        <div class="product-img">
                            <a href="product-details.html"><img src="{{ asset( $row->image_one )}}" alt="#"></a>
                            <div class="product-badge">
                                <ul>
                                    @if($row->discount_price == NULL)
                                    <li class="sale-badge">New</li>
                                    @else
                                    @php
                                    $amount = $row->selling_price - $row->discount_price;
                                    $discount = $amount/$row->selling_price*100;
                                    @endphp
                                    <li class="sale-badge">Sale!-{{ intval($discount) }}%</li>
                                    @endif
                                </ul>
                            </div>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a data-id="{{ $row->id }}" class="addcarts" href="" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="addwishlist" data-id="{{ $row->id }}" title="Wishlist">
                                            <i class="far fa-heart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <h2 class="product-title"><a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}">{{ $row->product_name }}</a></h2>
                            <div class="product-price">
                            @if($row->discount_price == NULL)
                            <span>${{ $row->selling_price }}</span>
                            @else
                            <del>${{ $row->selling_price }}</del> <span>${{ $row->discount_price }}</span>
                            @endif

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- PRODUCT SLIDER AREA END -->













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











<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e4b85f98de5201f"></script>



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



