@extends('layouts.app')

@section('content')
@include('layouts.menubar')




<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="{{ asset('img/bg/14.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Post Details</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ url('/') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>

                                @if(Session()->get('lang') == 'hindi')
                                {{ $posts->category_name_in }}
                                @else
                                {{ $posts->category_name_en }}
                                @endif

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->



    <!-- PAGE DETAILS AREA START (blog-details) -->
    <div class="ltn__page-details-area ltn__blog-details-area mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ltn__blog-details-wrap">
                        <div class="ltn__page-details-inner ltn__blog-details-inner">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-category">
                                        <a href="#"> @if(Session()->get('lang') == 'hindi')
                                            {{ $posts->category_name_in }}
                                            @else
                                            {{ $posts->category_name_en }}
                                            @endif</a>
                                    </li>
                                </ul>
                            </div>
                            <h2 class="ltn__blog-title">
                                @if(Session()->get('lang') == 'hindi')
								{{ $posts->post_title_in }}
								@else
								{{ $posts->post_title_en }}
								@endif
                            </h2>
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        {{-- <a href="{{ $setting->facebook }}"><img src="{{ asset('img/blog/author.jpg') }}" alt="#">By: {{$posts->author}}</a> --}}
                                    </li>
                                    <li class="ltn__blog-date">
                                        <i class="far fa-calendar-alt"></i>{{date('jS M Y',strtotime($posts->created_at))}}
                                    </li>
                                </ul>
                            </div>
                            <img src="{{ asset($posts->post_image) }}" alt="{{ asset($posts->post_image) }}">
                            <p>

                                @if(Session()->get('lang') == 'hindi')
								{!! $posts->details_in !!}
								@else
								{!! $posts->details_en !!}
								@endif </p>
                            </p>


                        </div>
                        <!-- blog-tags-social-media -->
                        <div class="ltn__blog-tags-social-media mt-80 row">
                            <div class="ltn__social-media text-right text-end col-lg-7">
                                <h4 style="text-align:left;margin-left: 40px;">Social Share</h4>
                                <span class="addthis_inline_share_toolbox"></span>
                            </div>
                        </div>
                        <hr>
                        <hr>
                        <!-- related-post -->

                        <div class="related-post-area mb-50">
                            <h4 class="title-2">Related Post</h4>
                            <div class="row">
                                @foreach($related_post as $posts)
                                <div class="col-md-6">
                                    <!-- Blog Item -->
                                    <div class="ltn__blog-item ltn__blog-item-6">
                                        <div class="ltn__blog-img">
                                            <a href="{{ url('blog/single/'.$posts->id) }}"><img src="{{ asset($posts->post_image) }}" alt="{{ asset($posts->post_image) }}"></a>
                                        </div>
                                        <div class="ltn__blog-brief">
                                            <div class="ltn__blog-meta">
                                                <ul>
                                                    <li class="ltn__blog-date ltn__secondary-color">
                                                        <i class="far fa-calendar-alt"></i>{{date('jS M Y',strtotime($posts->created_at))}}
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="ltn__blog-title"><a href="{{ url('blog/single/'.$posts->id) }}">
                                                @if(Session()->get('lang') == 'hindi')
                                                {{ $posts->post_title_in }}
                                                @else
                                                {{ $posts->post_title_en }}
                                                @endif</a></h3>
                                            <p>
                                                @if(Session()->get('lang') == 'hindi')
                                                {{Str::limit($posts->details_in,113)}}
                                                @else
                                                {{Str::limit($posts->details_en,113)}}
                                                @endif

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- comment-area -->
                        <div class="ltn__comment-area mb-50">
                            <h4 class="title-2">Post Comment</h4>
                            <div class="fb-comments" data-href="{{ Request::url() }}" data-width="" data-numposts="5"></div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area blog-sidebar ltn__right-sidebar">
                        <!-- Search Widget -->
                        <div class="widget ltn__search-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Search Objects</h4>
                            <form method="post" action="{{ route('product.search') }}">
                                @csrf
                                <input type="text" name="search" placeholder="Search your keyword...">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <!-- Popular Post Widget -->
                        <div class="widget ltn__popular-post-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Latest Blogs</h4>
                            <ul>
                                @foreach($latest_post as $posts)
                                <li>
                                    <div class="popular-post-widget-item clearfix">
                                        <div class="popular-post-widget-img">
                                            <a href="{{ url('blog/single/'.$posts->id) }}"><img src="{{ asset($posts->post_image) }}" alt="#"></a>
                                        </div>
                                        <div class="popular-post-widget-brief">
                                            <h6><a href="{{ url('blog/single/'.$posts->id) }}"> @if(Session()->get('lang') == 'hindi')
                                                {{ $posts->post_title_in }}
                                                @else
                                                {{ $posts->post_title_en }}
                                                @endif</a></h6>
                                            <div class="ltn__blog-meta">
                                                <ul>
                                                    <li class="ltn__blog-date">
                                                        <a href="#"><i class="far fa-calendar-alt"></i>{{date('jS M Y',strtotime($posts->created_at))}}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Social Media Widget -->
                        <div class="widget ltn__social-media-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Follow us</h4>
                            <div class="ltn__social-media-2">
                                <ul>
                                    <li><a href="{{ $setting->facebook }}" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ $setting->twitter }}" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ $setting->instagram }}" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{ $setting->youtube }}" title="Facebook"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget d-none">
                            <a href="{{ route('blog.post') }}"><img src="{{asset('img/banner/2.jpg')}}" alt="{{asset('img/banner/2.jpg')}}"></a>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE DETAILS AREA END -->



    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e4b85f98de5201f"></script>


@endsection
