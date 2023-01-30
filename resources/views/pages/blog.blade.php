@extends('layouts.app')

@section('content')
@include('layouts.menubar')




    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="{{ asset('img/bg/14.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Blog</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ url('/') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>All Post</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->


    <!-- BLOG AREA START -->
    <div class="ltn__blog-area ltn__blog-item-3-normal mb-100">
        <div class="container">
            <div class="row">
                <!-- Blog Item -->
                @foreach($post as $row)
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="{{ url('blog/single/'.$row->id) }}"><img src="{{ asset($row->post_image) }}" alt="{{ asset($row->post_image) }}"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        {{-- <a href="#"><i class="far fa-user"></i>by: {{$row->author}}</a> --}}
                                    </li>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__pagination-area text-center">
                        {{ $post->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BLOG AREA END -->

@endsection
