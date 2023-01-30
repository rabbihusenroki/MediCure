<!-- header-bottom-area start -->
<div class="header-bottom-area ltn__border-top ltn__header-sticky  ltn__sticky-bg-white--- ltn__sticky-bg-secondary ltn__secondary-bg section-bg-1 menu-color-white d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col header-menu-column justify-content-center">
                <div class="sticky-logo">
                    <div class="site-logo">
                        <a href="{{url('/')}}"><img src="{{ asset( 'img/logo-3.png' )}}" alt="{{ asset( 'img/logo-3.png' )}}"></a>
                    </div>
                </div>
                <div class="header-menu header-menu-2">
                    <nav>
                        <div class="ltn__main-menu">
                            <ul>
                                <li class="menu-icon"><a href="{{url('/')}}">Home</a></li>
                                <li class="menu-icon"><a href="{{ route('shop') }}">Shop</a></li>
                                <li class="menu-icon"><a href="{{ route('blog.post') }}">Blogs</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header-bottom-area end -->
<!-- MOBILE MENU START -->
<div class="mobile-header-menu-fullwidth mb-30 d-block d-lg-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Mobile Menu Button -->
                <div class="mobile-menu-toggle d-lg-none">
                    <span>MENU</span>
                    <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                        <svg viewBox="0 0 800 600">
                            <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                            <path d="M300,320 L540,320" id="middle"></path>
                            <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MOBILE MENU END -->



