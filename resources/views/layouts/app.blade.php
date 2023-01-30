@php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Response;
use Auth;
use Session;

$cart = Cart::content();

@endphp
@php
$setting = DB::table('sitesetting')->first();

@endphp
<!doctype html>
<html class="no-js" lang="zxx">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MediCure - A Online Medical Store</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- SweetAlert css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <!-- Stripe css -->
    <script src="https://js.stripe.com/v3/"></script>
</head>

<body>


    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-3) -->
    <header class="ltn__header-area ltn__header-3">
        <!-- ltn__header-top-area start -->
        <div class="ltn__header-top-area border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li><a href="mailto:wp.dev.tahsin786@gmail.com"><i class="icon-mail"></i>{{ $setting->email }}</a></li>
                                <li><a href="{{ url('/') }}"><i class="icon-placeholder"></i>{{ $setting->company_address }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="top-bar-right text-right text-end">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    @php
                                    $language = Session()->get('lang');
                                    @endphp
                                    <li>
                                        <!-- ltn__language-menu -->
                                        <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                            <ul>
                                                <li>
                                                    @if(Session()->get('lang') == 'hindi' )
                                                    <a href="{{ route('language.english') }}" class="dropdown-toggle"><span class="active-currency">English</span></a>
                                                    @else
                                                    <a href="{{ route('language.hindi') }}" class="dropdown-toggle"><span class="active-currency">Bangla</span></a>
                                                    @endif
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <!-- ltn__social-media -->
                                        <div class="ltn__social-media">
                                            <ul>
                                                <li><a href="{{ $setting->facebook }}" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="{{ $setting->twitter }}" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="{{ $setting->instagram }}" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="{{ $setting->youtube }}" title="Facebook"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    @guest
                                    @else
                                    @php
                                    $wishlist = DB::table('wishlists')->where('user_id',Auth::id())->get();
                                    @endphp
                                    <li style="width: 10px;">
                                        <!-- Wishlist -->
                                        <div class="mini-cart-icon mini-cart-icon-2">
                                            <a href="{{ route('user.wishlist') }}">
                                                <span class="mini-cart-icon ltn__secondary-color">
                                                    <i class="far fa-heart"></i>
                                                    <sup>{{ count($wishlist) }}</sup>
                                                </span>
                                            </a>
                                        </div>

                                    </li>
                                    @endguest

                                    <!-- Tracking Order -->
                                    @guest

                                    @else
                                    <li>
                                         <div class="ltn__social-media">
                                            <ul>
                                                <li><a href="" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modals"><i class="far fa-eye"></i>Track Order</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ltn__header-top-area end -->
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area" style="padding: 30px 0;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col header-contact-serarch-column d-none d-lg-block">
                        <div class="header-contact-search">
                            <!-- header-feature-item -->
                            <div class="header-feature-item">
                                <div class="header-feature-icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="header-feature-info">
                                    <h6>Phone</h6>
                                    <p><a href="tel:01893904686">{{ $setting->phone_one }}</a></p>
                                </div>
                            </div>
                            <!-- header-search-2 -->
                            @php
                            $category = DB::table('categories')->get();
                            @endphp
                            <div class="header-search-2">
                                <form method="post" action="{{ route('product.search') }}">
                                    @csrf
                                    <input type="text" name="search" value="" placeholder="Search for products (e.g. eggs, milk, potato)"/>
                                    <button type="submit">
                                        <span><i class="icon-search"></i></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <!-- header-options -->
                        <div class="ltn__header-options">
                            <ul>
                                <li class="d-none">
                                    <!-- ltn__currency-menu -->
                                    <div class="ltn__drop-menu ltn__currency-menu">
                                        <ul>
                                            <li><a href="#" class="dropdown-toggle"><span class="active-currency">USD</span></a>
                                                <ul>
                                                    <li><a href="login.html">USD - US Dollar</a></li>
                                                    <li><a href="wishlist.html">CAD - Canada Dollar</a></li>
                                                    <li><a href="register.html">EUR - Euro</a></li>
                                                    <li><a href="account.html">GBP - British Pound</a></li>
                                                    <li><a href="wishlist.html">INR - Indian Rupee</a></li>
                                                    <li><a href="wishlist.html">BDT - Bangladesh Taka</a></li>
                                                    <li><a href="wishlist.html">JPY - Japan Yen</a></li>
                                                    <li><a href="wishlist.html">AUD - Australian Dollar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                {{-- <li class="d-lg-none">
                                    <!-- header-search-1 -->
                                    <div class="header-search-wrap">
                                        <div class="header-search-1">
                                            <div class="search-icon">
                                                <i class="icon-search  for-search-show"></i>
                                                <i class="icon-cancel  for-search-close"></i>
                                            </div>
                                        </div>
                                        <div class="header-search-1-form">
                                            <form id="#" method="get"  action="#">
                                                <input type="text" name="search" value="" placeholder="Search here..."/>
                                                <button type="submit">
                                                    <span><i class="icon-search"></i></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </li> --}}
                                <li class="d-none---">
                                    <!-- user-menu -->

                                    <div class="ltn__drop-menu user-menu">
                                        @guest
                                        <ul>
                                            <li>
                                                <a href="#"><i class="icon-user"></i></a>
                                                <ul>
                                                    <li><a href="{{ route('login') }}">Sign in</a></li>
                                                    <li><a href="{{ route('register') }}">Register</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        @else
                                        <ul>
                                            <li>
                                                <a href="{{ route('home') }}"><i class="icon-user"></i></a>
                                                <ul>
                                                    <li><a href="{{ route('home') }}">My Account</a></li>
                                                    <li><a href="{{ route('user.wishlist') }}">Wishlist</a></li>
                                                    <li><a href="{{ route('user.checkout') }}">Checkout</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        @endguest
                                    </div>
                                </li>


                                <li>
                                <!-- mini-cart 2 -->
                                    <div class="mini-cart-icon mini-cart-icon-2">
                                        <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                                            <span class="mini-cart-icon">
                                                <i class="icon-shopping-cart"></i>
                                                <sup>{{ Cart::count() }}</sup>
                                            </span>
                                            <h6><span>Cart</span> <span class="ltn__secondary-color">${{ Cart::subtotal() }}</span></h6>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->

        <!-- Content Part -->

        @yield('content')

        <!-- End Content Part -->

        <!-- header-bottom-area start -->



    <!-- CALL TO ACTION START (call-to-action-6) -->
    <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                        <div class="coll-to-info text-color-white">
                            <h1>Buy medical disposable face mask <br> to protect your loved ones</h1>
                        </div>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-3 btn-white" href="{{route('shop')}}">Explore Products <i class="icon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- FOOTER AREA START -->
    @php

    $setting = DB::table('sitesetting')->first();

    @endphp

    <footer class="ltn__footer-area  ">
        <div class="footer-top-area  section-bg-2 plr--5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about-widget">
                            <div class="footer-logo">
                                <div class="site-logo">
                                    <img src="{{ asset( 'img/logo-2.png' )}}" alt="Logo">
                                </div>
                            </div>
                            <p>{{ $setting->company_name }}</p>
                            <div class="footer-address">
                                <ul>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p>{{ $setting->company_address }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-call"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="tel:+8801893904686">{{ $setting->phone_two }}</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-mail"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="mailto:example@example.com">{{ $setting->email }}</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__social-media mt-20">
                                <ul>
                                    <li><a href="{{ $setting->facebook }}" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ $setting->twitter }}" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ $setting->instagram }}" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{ $setting->youtube }}" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Company</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">All Products</a></li>
                                    <li><a href="#">Locations Map</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Services</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="{{ route('order.tracking') }}">Order tracking</a></li>
                                    <li><a href="wishlist.html">Wish List</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="account.html">My account</a></li>
                                    <li><a href="about.html">Terms & Conditions</a></li>
                                    <li><a href="about.html">Promotional Offers</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Customer Care</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="account.html">My account</a></li>
                                    <li><a href="wishlist.html">Wish List</a></li>
                                    <li><a href="order-tracking.html">Order tracking</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                        <div class="footer-widget footer-newsletter-widget">
                            <h4 class="footer-title">Newsletter</h4>
                            <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                            <div class="footer-newsletter">
                                <form action="{{ route('store.newslater') }}" method="post">
                                    @csrf
                                    <input type="email" name="email" placeholder="Email*">
                                    <div class="btn-wrapper">
                                        <button class="theme-btn-1 btn" type="submit"><i class="fas fa-location-arrow"></i></button>
                                    </div>
                                </form>
                            </div>
                            <h5 class="mt-30">We Accept</h5>
                            <img src="{{ asset( 'img/icons/payment-4.png' )}}" alt="Payment Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5">
            <div class="container-fluid ltn__border-top-2">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="ltn__copyright-design clearfix">
                            <p>All Rights Reserved @ <a href="{{ $setting->facebook }}">MediCure</a> <span class="current-year"></span></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 align-self-center">
                        <div class="ltn__copyright-menu text-end">
                            <ul>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Claim</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->



<!-- Tracking MODAL AREA START (Quick View Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="quick_view_modals" tabindex="-1">
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
                                    <div class="col-lg-12 col-12">
                                        <div class="modal-product-info">
                                            <form method="post" action="{{ route('order.tracking') }}">
                                                @csrf
                                                <p class="text-center"> To track your order please enter your Order ID in the box below and press the "Track Order" button. This was given to you on your products current state. </p>
                                                <label>Order ID</label>
                                                <input type="text" name="code" placeholder="Please input your order id" required="">
                                                <div class="btn-wrapper mt-0 text-center">
                                                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Track Order</button>
                                                </div>
                                            </form>
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
    <!--Tracking MODAL AREA END -->



<!-- Utilize Cart Menu Start -->
<div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">

    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head" style="margin-bottom: 0px !important; padding-bottom: 0px !important;">

            <span class="ltn__utilize-menu-title">Cart</span>
            <button class="ltn__utilize-close">×</button>
        </div>


        <div>
            <hr style="margin-top: 36px; margin-bottom: 50px; border-top: 1px solid #f6f6f6 !important;">
        <div class="mini-cart-product-area ltn__scrollbar">
            @foreach($cart as $row)
            <div class="mini-cart-item clearfix" >

                <div class="mini-cart-img">
                    <a href="{{ url('remove/cart/'.$row->rowId ) }}"><img src="{{ asset($row->options->image) }}" alt="Image" style="width: 70px; width: 70px;">
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span></a>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="">{{ $row->name }}</a></h6>
                    <span class="mini-cart-quantity">{{ $row->qty }}x ${{ $row->price }} = ${{ $row->price*$row->qty }}</span>
                </div>

            </div>
            @endforeach
        </div>
        <div class="mini-cart-footer">
            <div class="mini-cart-sub-total">
                <span class="sale-badge">15% VAT</span>
                <h5>Subtotal: <span>${{ Cart::total() }}</span></h5>
            </div>
            <div class="btn-wrapper">
                <a href="{{ route('show.cart') }}" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                @guest
                <a href="{{ route('login') }}" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                @else
                <a href="{{ route('user.checkout') }}" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                @endguest
            </div>

        </div>
        <p>Free Shipping All Orders Over $100!</p>
    </div>
    </div>
</div>
<!-- Utilize Cart Menu End -->







</div>
<!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Toaster JS Plugins -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>


 <script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
     </script>


 <script>
         $(document).on("click", "#return", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to Return?",
                  text: "Once Teturn, this will return your money!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Cancel!");
                  }
                });
            });
    </script>


</body>


</html>

