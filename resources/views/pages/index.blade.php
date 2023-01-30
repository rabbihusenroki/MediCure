@extends('layouts.app')

@section('content')

@include('layouts.menubar')



<!-- SLIDER AREA START (slider-3) -->
<div class="ltn__slider-area ltn__slider-3---  section-bg-1--- mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <!-- CATEGORY-MENU-LIST START -->
                @include('layouts.sidemenu')
                <!-- END CATEGORY-MENU-LIST -->
            </div>
            <div class="col-lg-9">
            <!-- SLIDER AREA START (slider-3) -->
            @include('layouts.slider')
            <!-- SLIDER AREA END -->
            </div>
        </div>
    </div>
</div>
<!-- SLIDER AREA END -->


    <!-- FEATURE AREA START ( Feature - 3) -->
    <div class="ltn__feature-area mt-35 mt--65---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__feature-item-box-wrap ltn__feature-item-box-wrap-2 ltn__border section-bg-1">
                        <div class="ltn__feature-item ltn__feature-item-8">
                            <div class="ltn__feature-icon">
                                <img src="img/icons/svg/8-trolley.svg" alt="#">
                            </div>
                            <div class="ltn__feature-info">
                                <h4>Free shipping</h4>
                                <p>On all orders over $49.00</p>
                            </div>
                        </div>
                        <div class="ltn__feature-item ltn__feature-item-8">
                            <div class="ltn__feature-icon">
                                <img src="img/icons/svg/9-money.svg" alt="#">
                            </div>
                            <div class="ltn__feature-info">
                                <h4>15 days returns</h4>
                                <p>Moneyback guarantee</p>
                            </div>
                        </div>
                        <div class="ltn__feature-item ltn__feature-item-8">
                            <div class="ltn__feature-icon">
                                <img src="img/icons/svg/10-credit-card.svg" alt="#">
                            </div>
                            <div class="ltn__feature-info">
                                <h4>Secure checkout</h4>
                                <p>Protected by Paypal</p>
                            </div>
                        </div>
                        <div class="ltn__feature-item ltn__feature-item-8">
                            <div class="ltn__feature-icon">
                                <img src="img/icons/svg/11-gift-card.svg" alt="#">
                            </div>
                            <div class="ltn__feature-info">
                                <h4>Offer & gift here</h4>
                                <p>On all orders over</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->


    <style>

        /* .align-center {
          -webkit-box-align: center;
          -ms-flex-align: center;
          align-items: center;
        }

        .flex-centerY-centerX {
          justify-content: center;
          -webkit-box-pack: center;
          -ms-flex-pack: center;
          justify-content: center;
          -webkit-box-align: center;
          -ms-flex-align: center;
          align-items: center;
        }



        .page-wrapper {
          height: 100%;
          display: table;
        }

        .page-wrapper .page-inner {
          display: table-cell;
          vertical-align: middle;
        } */

        .el-wrapper {
            background-color: #fff;
            margin-bottom: 10px;
            box-shadow: rgb(60 64 67 / 30%) 0px 1px 2px 0px, rgb(60 64 67 / 15%) 0px 1px 3px 1px;
        }

        @media (max-width: 991px) {
          .el-wrapper {
            width: 345px;
          }
        }

        @media (max-width: 767px) {
          .el-wrapper {
            width: 290px;
            margin: 30px auto;
          }
        }

        .el-wrapper:hover .h-bg {
          left: 0px;
        }

        .el-wrapper:hover .prices {
          left: 20px;
          -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          -o-transform: translateY(-50%);
          transform: translateY(-50%);
          color: #818181;
        }

        .el-wrapper:hover .add-to-carts {
          left: 50%;
        }

        .el-wrapper:hover .imgs {
          webkit-filter: blur(7px);
          -o-filter: blur(7px);
          -ms-filter: blur(7px);
          filter: blur(7px);
          filter: progid:DXImageTransform.Microsoft.Blur(pixelradius='7', shadowopacity='0.0');
          opacity: 0.4;
        }

        .el-wrapper:hover .info-inners {
          bottom: 155px;
        }

        .el-wrapper:hover .a-size {
          -webkit-transition-delay: 300ms;
          -o-transition-delay: 300ms;
          transition-delay: 300ms;
          bottom: 50px;
          opacity: 1;
        }

        .el-wrapper .box-down {
          width: 100%;
          height: 60px;
          position: relative;
          overflow: hidden;
        }

        .el-wrapper .box-up {
          width: 100%;
          height: 300px;
          position: relative;
          overflow: hidden;
          text-align: center;
          font-weight: 700;
            line-height: 1.3;
        }

        .el-wrapper .imgs {
          padding: 20px 0;
          -webkit-transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
          -moz-transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
          -o-transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
          transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
          /* ease-out */
          -webkit-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          -moz-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          -o-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          /* ease-out */
        }

        .h-bg {
          -webkit-transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
          -moz-transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
          -o-transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
          transition: all 800ms cubic-bezier(0, 0, 0.18, 1);
          /* ease-out */
          -webkit-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          -moz-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          -o-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          /* ease-out */
          width: 660px;
          height: 100%;
          background-color: #0a9a73;
          position: absolute;
          left: -659px;
        }

        .h-bg .h-bg-inner {
          width: 50%;
          height: 100%;
          background-color: #464646;
        }

        .info-inners {
          -webkit-transition: all 400ms cubic-bezier(0, 0, 0.18, 1);
          -moz-transition: all 400ms cubic-bezier(0, 0, 0.18, 1);
          -o-transition: all 400ms cubic-bezier(0, 0, 0.18, 1);
          transition: all 400ms cubic-bezier(0, 0, 0.18, 1);
          /* ease-out */
          -webkit-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          -moz-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          -o-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          /* ease-out */
          position: absolute;
          width: 100%;
          bottom: 25px;
        }

        .info-inners .p-name,
        .info-inners .p-company {
          display: block;
        }

        .info-inners .p-name {
          font-family: 'PT Sans', sans-serif;
          font-size: 18px;
          color: #252525;
        }

        .info-inners .p-company {
          font-family: 'Lato', sans-serif;
          font-size: 12px;
          text-transform: uppercase;
          /* color: #8c8c8c; */
          color: #024432;
        }

        .a-size {
          -webkit-transition: all 300ms cubic-bezier(0, 0, 0.18, 1);
          -moz-transition: all 300ms cubic-bezier(0, 0, 0.18, 1);
          -o-transition: all 300ms cubic-bezier(0, 0, 0.18, 1);
          transition: all 300ms cubic-bezier(0, 0, 0.18, 1);
          /* ease-out */
          -webkit-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          -moz-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          -o-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          /* ease-out */
          position: absolute;
          width: 100%;
          bottom: -20px;
          font-family: 'PT Sans', sans-serif;
          color: #828282;
          opacity: 0;
        }

        .a-size .sizes {
          color: #252525;
        }

        .carts {
          display: block;
          position: absolute;
          width: 100%;
          height: 100%;
          top: 0;
          left: 0;
          font-family: 'Lato', sans-serif;
          font-weight: 700;
        }

        .carts .prices {
          -webkit-transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
          -moz-transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
          -o-transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
          transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
          /* ease-out */
          -webkit-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          -moz-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          -o-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          /* ease-out */
          -webkit-transition-delay: 100ms;
          -o-transition-delay: 100ms;
          transition-delay: 100ms;
          display: block;
          position: absolute;
          top: 50%;
          left: 50%;
          -webkit-transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);
          -o-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
          font-size: 16px;
          color: #252525;
        }

        .carts .add-to-carts {
          -webkit-transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
          -moz-transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
          -o-transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
          transition: all 600ms cubic-bezier(0, 0, 0.18, 1);
          /* ease-out */
          -webkit-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          -moz-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          -o-transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          transition-timing-function: cubic-bezier(0, 0, 0.18, 1);
          /* ease-out */
          -webkit-transition-delay: 100ms;
          -o-transition-delay: 100ms;
          transition-delay: 100ms;
          display: block;
          position: absolute;
          top: 50%;
          left: 110%;
          -webkit-transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);
          -o-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
        }

        .carts .add-to-carts .txt {
          font-size: 12px;
          color: #fff;
          letter-spacing: 0.045em;
          text-transform: uppercase;
          white-space: nowrap;
        }

        </style>


    @php
    //Category Popular Product
    $category = DB::table('categories')->skip(0)->first();
    $categoryId = $category->id;
    $product = DB::table('products')->where('category_id',$categoryId)->where('status',1)->limit(8)->orderBy('id','DESC')->get();



    $categorytwo = DB::table('categories')->skip(1)->first();
    $categoryId = $categorytwo->id;
    $producttwo = DB::table('products')->where('category_id',$categoryId)->where('status',1)->limit(8)->orderBy('id','DESC')->get();


    $categorythree = DB::table('categories')->skip(2)->first();
    $categoryId = $categorythree->id;
    $productthree = DB::table('products')->where('category_id',$categoryId)->where('status',1)->limit(8)->orderBy('id','DESC')->get();


    $categoryfour = DB::table('categories')->skip(3)->first();
    $categoryId = $categoryfour->id;
    $productfour = DB::table('products')->where('category_id',$categoryId)->where('status',1)->limit(8)->orderBy('id','DESC')->get();

    $categoryfive = DB::table('categories')->skip(4)->first();
    $categoryId = $categoryfive->id;
    $productfive = DB::table('products')->where('category_id',$categoryId)->where('status',1)->limit(8)->orderBy('id','DESC')->get();

    //Featured Product
    $featured = DB::table('products')->where('status',1)->orderBy('id','desc')->limit(9)->get();

    //Buy One Get One Product
    // $buyget = DB::table('products')
    //         ->join('brands','products.brand_id','brands.id')
    //         ->select('products.*','brands.brand_name')
    //         ->where('status',1)->where('buyone_getone',1)->orderBy('id','DESC')->limit(3)->get();

    //Hot New Today Product
    $hot_new = DB::table('products')
            ->join('brands','products.brand_id','brands.id')
            ->select('products.*','brands.brand_name')
            ->where('status',1)->where('hot_new',1)->orderBy('id','DESC')->limit(3)->get();




    //Mid Slider Discounts Product
    $mid = DB::table('products')
            ->join('categories','products.category_id','categories.id')
            ->join('brands','products.brand_id','brands.id')
            ->select('products.*','brands.brand_name','categories.category_name')
            ->where('products.mid_slider',1)->orderBy('id','DESC')->limit(10)
            ->get();

    //Trend Product
    $trend = DB::table('products')->where('status',1)->where('trend',1)->orderBy('id','desc')->limit(4)->get();

    //Popular Product
    $popular = DB::table('products')->where('status',1)->orderBy('product_views','desc')->limit(9)->get();

    //Hot-Deal Product
    $hot_deal = DB::table('products')
            ->join('brands','products.brand_id','brands.id')
            ->select('products.*','brands.brand_name')
            ->where('products.status',1)->where('hot_deal',1)->orderBy('id','desc')->limit(10)
            ->get();

    //Limited Stock
    $limited = DB::table('products')
            ->join('brands','products.brand_id','brands.id')
            ->select('products.*','brands.brand_name')
            ->where('products.status',1)->where('best_rated',1)->orderBy('product_quantity','asc')->limit(8)
            ->get();

    //Blog
    $post = DB::table('posts')
		->join('post_category','posts.category_id','post_category.id')
		->select('posts.*','post_category.category_name_en','post_category.category_name_in')->orderBy('created_at','desc')
		->limit(8)->get();

    //Brand
    $brand = DB::table('brands')
		->select('brands.*')
		->orderBy('id','desc')->get();

@endphp


    <!-- Category PRODUCT  -->
    <div class="ltn__product-tab-area ltn__product-gutter pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <!-- <h6 class="section-subtitle ltn__secondary-color">// Cars</h6> -->
                        <h1 class="section-title">Popular <span style="color:#0a9a73;">Categories</span></h1>
                        <p>No waiting in traffic, no haggling, no worries carrying groceries, they're delivered right at your door.</p>
                    </div>
                    <div class="ltn__tab-menu ltn__tab-menu-2 ltn__tab-menu-top-right-- text-uppercase text-center">
                        <div class="nav">
                            <a class="active show" data-bs-toggle="tab" href="#liton_tab_3_1">Beverages</a>
                            <a data-bs-toggle="tab" href="#liton_tab_3_2" class="">Frozen Foods</a>
                            <a data-bs-toggle="tab" href="#liton_tab_3_3" class="">Sea Fish's</a>
                            <a data-bs-toggle="tab" href="#liton_tab_3_4" class="">Crisp Bakery</a>
                            <a data-bs-toggle="tab" href="#liton_tab_3_5" class="">Personal Care</a>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_3_1">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item -->
                                    @foreach($product as $row)
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"><img src="{{ asset( $row->image_one )}}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        @if($row->discount_price == NULL)
                                                        <li class="sale-badge">New</li>
                                                        @else
                                                        <li class="sale-badge">
                                                            @php
                                                            $amount = $row->selling_price - $row->discount_price;
                                                            $discount = $amount/$row->selling_price*100;
                                                            @endphp

                                                            {{ intval($discount) }}%
                                                        </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="" id="{{ $row->id }}" class="addcart" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal" onclick="productview(this.id)">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        @if($row->product_quantity > 0)
                                                        <li>

                                                            <a data-id="{{ $row->id }}" class="addcarts" href="" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>

                                                        </li>
                                                        @endif
                                                        <li>
                                                            <a class="addwishlist" data-id="{{ $row->id }}" title="Wishlist">
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
                                                        <li class="review-total"> <a href="#"> (24)</a></li>
                                                    </ul>
                                                </div> --}}
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
                                    <!-- ltn__product-item End -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_2">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">

                                        <!-- ltn__product-item -->
                                        @foreach($producttwo as $row)
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"><img src="{{ asset( $row->image_one )}}" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            @if($row->discount_price == NULL)
                                                            <li class="sale-badge">New</li>
                                                            @else
                                                            <li class="sale-badge">
                                                                @php
                                                                $amount = $row->selling_price - $row->discount_price;
                                                                $discount = $amount/$row->selling_price*100;
                                                                @endphp

                                                                {{ intval($discount) }}%
                                                            </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="" id="{{ $row->id }}" class="addcart" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal" onclick="productview(this.id)">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            @if($row->product_quantity > 0)
                                                            <li>

                                                                <a data-id="{{ $row->id }}" class="addcarts" href="" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>

                                                            </li>
                                                            @endif
                                                            <li>
                                                                <a class="addwishlist" data-id="{{ $row->id }}" title="Wishlist">
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
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div> --}}
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
                                        <!-- ltn__product-item End -->

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_3">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">

                                     <!-- ltn__product-item -->
                                     @foreach($productthree as $row)
                                     <div class="col-lg-12">
                                         <div class="ltn__product-item ltn__product-item-3 text-center">
                                             <div class="product-img">
                                                 <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"><img src="{{ asset( $row->image_one )}}" alt="#"></a>
                                                 <div class="product-badge">
                                                     <ul>
                                                         @if($row->discount_price == NULL)
                                                         <li class="sale-badge">New</li>
                                                         @else
                                                         <li class="sale-badge">
                                                             @php
                                                             $amount = $row->selling_price - $row->discount_price;
                                                             $discount = $amount/$row->selling_price*100;
                                                             @endphp

                                                             {{ intval($discount) }}%
                                                         </li>
                                                         @endif
                                                     </ul>
                                                 </div>
                                                 <div class="product-hover-action">
                                                     <ul>
                                                         <li>
                                                             <a href="" id="{{ $row->id }}" class="addcart" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal" onclick="productview(this.id)">
                                                                 <i class="far fa-eye"></i>
                                                             </a>
                                                         </li>
                                                         @if($row->product_quantity > 0)
                                                         <li>

                                                             <a data-id="{{ $row->id }}" class="addcarts" href="" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                 <i class="fas fa-shopping-cart"></i>
                                                             </a>

                                                         </li>
                                                         @endif
                                                         <li>
                                                             <a class="addwishlist" data-id="{{ $row->id }}" title="Wishlist">
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
                                                         <li class="review-total"> <a href="#"> (24)</a></li>
                                                     </ul>
                                                 </div> --}}
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
                                     <!-- ltn__product-item End -->




                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_4">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                           <!-- ltn__product-item -->
                            @foreach($productfour as $row)
                            <div class="col-lg-12">
                                <div class="ltn__product-item ltn__product-item-3 text-center">
                                    <div class="product-img">
                                        <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"><img src="{{ asset( $row->image_one )}}" alt="#"></a>
                                        <div class="product-badge">
                                            <ul>
                                                @if($row->discount_price == NULL)
                                                <li class="sale-badge">New</li>
                                                @else
                                                <li class="sale-badge">
                                                    @php
                                                    $amount = $row->selling_price - $row->discount_price;
                                                    $discount = $amount/$row->selling_price*100;
                                                    @endphp

                                                    {{ intval($discount) }}%
                                                </li>
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul>
                                                <li>
                                                    <a href="" id="{{ $row->id }}" class="addcart" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal" onclick="productview(this.id)">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </li>

                                                @if($row->product_quantity > 0)
                                                <li>

                                                    <a data-id="{{ $row->id }}" class="addcarts" href="" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>

                                                </li>
                                                @endif

                                                <li>
                                                    <a class="addwishlist" data-id="{{ $row->id }}" title="Wishlist">
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
                                                <li class="review-total"> <a href="#"> (24)</a></li>
                                            </ul>
                                        </div> --}}
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
                            <!-- ltn__product-item End -->





                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_5">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">


                            <!-- ltn__product-item -->
                            @foreach($productfive as $row)
                            <div class="col-lg-12">
                                <div class="ltn__product-item ltn__product-item-3 text-center">
                                    <div class="product-img">
                                        <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"><img src="{{ asset( $row->image_one )}}" alt="#"></a>
                                        <div class="product-badge">
                                            <ul>
                                                @if($row->discount_price == NULL)
                                                <li class="sale-badge">New</li>
                                                @else
                                                <li class="sale-badge">
                                                    @php
                                                    $amount = $row->selling_price - $row->discount_price;
                                                    $discount = $amount/$row->selling_price*100;
                                                    @endphp

                                                    {{ intval($discount) }}%
                                                </li>
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul>
                                                <li>
                                                    <a href="" id="{{ $row->id }}" class="addcart" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal" onclick="productview(this.id)">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </li>

                                                @if($row->product_quantity > 0)
                                                <li>

                                                    <a data-id="{{ $row->id }}" class="addcarts" href="" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>

                                                </li>
                                                @endif

                                                <li>
                                                    <a class="addwishlist" data-id="{{ $row->id }}" title="Wishlist">
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
                                                <li class="review-total"> <a href="#"> (24)</a></li>
                                            </ul>
                                        </div> --}}
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
                            <!-- ltn__product-item End -->




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TAB AREA END -->




 <!-- Featured PRODUCT  -->
 <div class="ltn__product-area ltn__product-gutter  no-product-ratting pt-20--- pt-65  pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title"><span style="color:#0a9a73;">Daily</span> Needs</h1>
                </div>
            </div>
        </div>
        <div class="row">
        <h2 style="border-left: 5px solid #0a9a73;
            margin-left: 17px;" class="p-name">Hot New <span style="color:#0a9a73;">Today</span></h2>
            <div class="col-lg-3">
                <div class="row">
                    <!-- Featured PRODUCT AREA START (product-item-3) -->
                    @foreach($hot_new as $row)
                    <div class="col-lg-12 col-sm-6">
                                <div class="el-wrapper" >
                                  <div class="box-up">
                                    <img class="imgs" src="{{ asset( $row->image_one )}}" alt="">
                                    <div class="img-infos">
                                      <div class="info-inners">

                                        <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"><span class="p-name">{{ $row->product_name }}</span></a>
                                        <a href=""><span class="p-company">{{ $row->brand_name }}</span></a>

                                      </div>
                                      <div class="a-size">Price :
                                        @if($row->discount_price == NULL)
                                      <span  class="sizes">${{ $row->selling_price }}</span>
                                      @else
                                      <del>${{ $row->selling_price }}</del> <span  class="sizes">${{ $row->discount_price }}</span>
                                      @endif

                                      </div>

                                    </div>
                                  </div>
                                  @if($row->product_quantity > 0)
                                  <div class="box-down">
                                    <div class="h-bg">
                                      <div class="h-bg-inner"></div>
                                    </div>
                                    <a href="" class="carts addcarts" data-id="{{ $row->id }}" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                      @if($row->discount_price == NULL)
                                      <span  class="prices">${{ $row->selling_price }}</span>
                                      @else
                                    <span  class="prices">${{ $row->discount_price }}</span>
                                      @endif
                                        
                                      <span class="add-to-carts">
                                        <span class="txt">Add in cart</span>
                                      </span>
                                    </a>     
                                  </div>
                                  @endif
                                </div>

                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
                    @foreach($featured as $row)
                    <!-- ltn__product-item -->
                    <div class="col-lg-3--- col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-2 text-left">
                            <div class="product-img">
                                <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"><img src="{{ asset( $row->image_one )}}" alt="Medicure"></a>
                                <div class="product-badge">
                                    <ul>
                                        @if($row->discount_price == NULL)
                                        <li class="sale-badge">New</li>
                                        @else
                                        <li class="sale-badge">
                                            @php
                                            $amount = $row->selling_price - $row->discount_price;
                                            $discount = $amount/$row->selling_price*100;
                                            @endphp

                                            {{ intval($discount) }}%
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="" id="{{ $row->id }}" class="addcart" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal" onclick="productview(this.id)">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        @if($row->product_quantity > 0)
                                        <li>

                                            <a data-id="{{ $row->id }}" class="addcarts" href="" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>

                                        </li>
                                        @endif
                                        <li>
                                            <a class="addwishlist" data-id="{{ $row->id }}" title="Wishlist">
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
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT AREA END -->




    <!-- Mid-Slider PRODUCT  -->
    <div class="ltn__product-area ltn__product-gutter  no-product-ratting pt-115 pb-70---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title">
                            Flash <span style="color:#0a9a73;">Sales</span></h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                <!-- ltn__product-item -->
                @foreach($mid as $row)
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__product-item ltn__product-item-3 text-center">
                        <div class="product-img">
                            <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"><img src="{{ asset( $row->image_one )}}" alt="{{ asset( $row->image_one )}}"></a>
                            <div class="product-badge">
                                <ul>
                                    @if($row->discount_price == NULL)
                                    <li class="sale-badge">New</li>
                                    @else
                                    <li class="sale-badge">
                                        @php
                                        $amount = $row->selling_price - $row->discount_price;
                                        $discount = $amount/$row->selling_price*100;
                                        @endphp

                                        {{ intval($discount) }}%
                                    </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="" id="{{ $row->id }}" class="addcart" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal" onclick="productview(this.id)">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </li>
                                    
                                    @if($row->product_quantity > 0)
                                        <li>

                                            <a data-id="{{ $row->id }}" class="addcarts" href="" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>

                                        </li>
                                        @endif

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
                <!-- ltn__product-item -->

            </div>
        </div>
    </div>
    <!-- PRODUCT AREA END -->




<!-- Trending PRODUCT  -->
<div class="ltn__product-area ltn__product-gutter  no-product-ratting pt-115 pb-70---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title"><span style="color:#0a9a73;">Trending</span> Products</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
            <!-- ltn__product-item -->
            @foreach($trend as $row)
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item ltn__product-item-3 text-center">
                    <div class="product-img">
                        <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"><img src="{{ asset( $row->image_one )}}" alt="{{ asset( $row->image_one )}}"></a>
                        <div class="product-badge">
                            <ul>
                                @if($row->discount_price == NULL)
                                <li class="sale-badge">New</li>
                                @else
                                <li class="sale-badge">
                                    @php
                                    $amount = $row->selling_price - $row->discount_price;
                                    $discount = $amount/$row->selling_price*100;
                                    @endphp

                                    {{ intval($discount) }}%
                                </li>
                                @endif
                            </ul>
                        </div>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="" id="{{ $row->id }}" class="addcart" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal" onclick="productview(this.id)">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </li>

                                @if($row->product_quantity > 0)
                                <li>

                                    <a data-id="{{ $row->id }}" class="addcarts" href="" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>

                                </li>
                                @endif

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
<!-- PRODUCT AREA END -->




    <!-- Popular PRODUCT -->
    <div class="ltn__small-product-list-area section-bg-1 pt-115 pb-90 mt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title">Top <span style="color:#0a9a73;">Views</span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- small-product-item -->
                @foreach($popular as $row)
                <div class="col-lg-4 col-md-6 col-12" style="overflow: hidden">
                    <div class="ltn__small-product-item">
                        <div class="small-product-item-img">
                            <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"><img src="{{ asset( $row->image_one )}}" alt="{{ asset( $row->image_one )}}"></a>
                        </div>
                        <div class="small-product-item-info">
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
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- SMALL PRODUCT LIST AREA END -->




    <!-- Hot-Deal Products -->
    <div class="ltn__product-area ltn__product-gutter  no-product-ratting pt-115 pb-70---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title">Hot <span style="color:#0a9a73;">Deals</span></h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                <!-- ltn__product-item -->
                @foreach($hot_deal as $row)
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    {{-- <div class="ltn__product-item ltn__product-item-3 text-center" style="border: none;"> --}}
                        <div class="el-wrapper" style="border: 1px solid;">
                            <div class="box-up">
                              <img class="imgs" src="{{ asset( $row->image_one )}}" alt="">
                              <div class="img-infos">
                                <div class="info-inners">

                                  <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"><span class="p-name">{{ $row->product_name }}</span></a>
                                  <a href=""><span class="p-company">{{ $row->brand_name }}</span></a>

                                </div>
                                <div class="a-size">Price :
                                  @if($row->discount_price == NULL)
                                <span  class="sizes">${{ $row->selling_price }}</span>
                                @else
                                <del>${{ $row->selling_price }}</del> <span  class="sizes">${{ $row->discount_price }}</span>
                                @endif

                                </div>

                              </div>
                            </div>

                            @if($row->product_quantity > 0)
                            <div class="box-down">
                              <div class="h-bg">
                                <div class="h-bg-inner"></div>
                              </div>

                              <a href="" class="carts addcarts" data-id="{{ $row->id }}" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                @if($row->discount_price == NULL)
                                <span  class="prices">${{ $row->selling_price }}</span>
                                @else
                              <span  class="prices">${{ $row->discount_price }}</span>
                                @endif

                                <span class="add-to-carts">
                                  <span class="txt">Add in cart</span>
                                </span>
                              </a>
                            </div>
                            @endif
                          </div>

                </div>
                @endforeach
                <!-- ltn__product-item -->

            </div>
        </div>
    </div>
    <!-- PRODUCT AREA END -->





<!-- Limited Stock -->
<div class="ltn__product-area ltn__product-gutter  no-product-ratting pt-115 pb-70---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title"><span style="color:#0a9a73;">Limited</span> Edition</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
            <!-- ltn__product-item -->
            @foreach($limited as $row)
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item ltn__product-item-3 text-center">

                    <div class="el-wrapper" style="border: 1px solid;">
                        <div class="box-up">
                          <img class="imgs" src="{{ asset( $row->image_one )}}" alt="">
                          <div class="img-infos">
                            <div class="info-inners">

                              <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"><span class="p-name">{{ $row->product_name }}</span></a>
                              <a href=""><span class="p-company">{{ $row->brand_name }}</span></a>

                            </div>
                            <div class="a-size">Price :
                              @if($row->discount_price == NULL)
                            <span  class="sizes">${{ $row->selling_price }}</span>
                            @else
                            <del>${{ $row->selling_price }}</del> <span  class="sizes">${{ $row->discount_price }}</span>
                            @endif

                            </div>

                          </div>
                        </div>
                        @if($row->product_quantity > 0)
                        <div class="box-down">
                          <div class="h-bg">
                            <div class="h-bg-inner"></div>
                          </div>

                          <a href="" class="carts addcarts" data-id="{{ $row->id }}" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                            @if($row->discount_price == NULL)
                            <span  class="prices">${{ $row->selling_price }}</span>
                            @else
                          <span  class="prices">${{ $row->discount_price }}</span>
                            @endif

                            <span class="add-to-carts">
                              <span class="txt">Add in cart</span>
                            </span>
                          </a>
                        </div>
                        @endif
                      </div>



                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- PRODUCT AREA END -->



    <!-- BLOG AREA START (blog-3) -->
    <div class="ltn__blog-area pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2--- ltn__secondary-color">News & Blogs</h6>
                        <h1 class="section-title">Leatest News Feeds</h1>
                    </div>
                </div>
            </div>
            <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
                <!-- Blog Item -->
                @foreach($post as $row)
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="{{ url('blog/single/'.$row->id) }}"><img src="{{ asset($row->post_image) }}" alt="{{ asset($row->post_image) }}"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>

                                            @if(Session()->get('lang') == 'hindi')
                                            {{ $row->category_name_in }}
                                            @else
                                            {{ $row->category_name_en }}
                                            @endif
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title">
                                <a href="{{ url('blog/single/'.$row->id) }}">
                                    @if(Session()->get('lang') == 'hindi')
                                    {{ $row->post_title_in }}
                                    @else
                                    {{ $row->post_title_en }}
                                    @endif

                                </a>
                            </h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>{{date('jS M Y',strtotime($row->created_at))}}</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="{{ url('blog/single/'.$row->id) }}">
                                        @if(Session()->get('lang') == 'hindi')
                                        বিস্তারিত পড়ুন
                                        @else
                                        Read More
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- BLOG AREA END -->

    <!-- BRAND LOGO AREA START -->
    <div class="ltn__brand-logo-area ltn__brand-logo-1 section-bg-1--- pt-110--- pb-95 plr--9--- d-none---">
        <div class="container">
            <div class="row ltn__brand-logo-active">
                @foreach($brand as $row)
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{ asset($row->brand_logo) }}" alt="{{ asset($row->brand_name) }}">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- BRAND LOGO AREA END -->








<!-- MODAL AREA START (Quick View Modal) -->
<div class="ltn__modal-area ltn__quick-view-modal-area">
    <div class="modal fade" id="quick_view_modal" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <!-- <i class="fas fa-times"></i> -->
                    </button>
                </div>
                <div class="modal-body">
                     <div class="ltn__quick-view-modal-inner">
                         <div class="modal-product-item">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="modal-product-img">
                                        <img id="pimage" src="" alt="Medicure Product">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="modal-product-info">
                                        {{-- <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                            </ul>
                                        </div> --}}
                                        <h6 id="pbrand"></h6>
                                        <h3 id="pname"></h3>
                                        <div class="product-price">

                                         <span style="font-size: 35px;" id="pdis"></span>
                                         <span class="badge" style="width: 80px !important;padding: 4px 15px !important;display: block; font-size: 18px; background: green;color: white;" id="psell"></span>

                                        </div>

                                        <div class="modal-product-meta ltn__product-details-menu-1">
                                            <ul>
                                                <li>
                                                    <strong>Categories:</strong>
                                                    <span id="pcat"></span>
                                                </li>
                                                <li>
                                                    <strong>Sub Categories:</strong>
                                                    <span id="psub"></span>
                                                </li>
                                                <li>

                                                  <strong>Stock:</strong> <span class="badge" style="background: green;color: white;" id="qty"></span> </li>
                                                </li>
                                            </ul>
                                        </div>
                                        <form method="post" action="{{ route('insert.into.cart') }}">
                                        @csrf
                                        <input type="hidden" name="product_id" id="product_id">
                                        <div class="ltn__product-details-menu-2">
                                            <ul>
                                                <li>
                                                    <div class="cart-plus-minus">
                                                        <input type="number" name="qty" value="1" class="cart-plus-minus-box">
                                                    </div>
                                                </li>
                                              
                                                <li>
                                                    <button type="submit" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                        <span>ADD TO CART</span>
                                                    </button>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        </form>
                                        <hr>

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
       
       $('#qty').text(data.product.product_quantity);

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
