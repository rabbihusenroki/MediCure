@php
$sliders = DB::table('products')
->join('brands','products.brand_id','brands.id')
->select('products.*','brands.brand_name')
->where('main_slider',1)->orderBy('id','DESC')->limit(3)->get();

@endphp




<!-- SLIDER AREA START (slider-3) -->
<div class="ltn__slider-area ltn__slider-3  section-bg-1">
    <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
        <!-- ltn__slide-item -->
        @foreach($sliders as $key => $slider)
        <div style="width:870;height:635px" class="{{$key == 0 ? 'active' : ''}} ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60---"
            data-bs-bg="{{ asset( $slider->image_three  )}}">
            <div class="ltn__slide-item-inner  text-left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <h6 class="slide-sub-title white-color--- animated"><span><i
                                                class="fas fa-syringe"></i></span> 100% genuine Products</h6>
                                    <h1 class="slide-title animated ">Get 20% Discount <br>Of
                                        {{ $slider->product_name }}</h1>
                                    <div class="slide-brief animated">
                                        @if($slider->discount_price == NULL)
                                        <h5 class="color-orange  animated">Selling at ${{ $slider->selling_price }}</h5>
                                        @else
                                        <h5 class="color-orange  animated"><span>Discount at
                                                $<del>{{ $slider->selling_price }}</del></span>
                                            <span>${{ $slider->discount_price }}</span> </h5>
                                        @endif
                                    </div>
                                    <div class="btn-wrapper animated">
                                        <a href="{{ url('product/details/'.$slider->id.'/'.$slider->product_name) }}"
                                            class="theme-btn-1 btn btn-effect-1">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- SLIDER AREA END -->




















<!-- SLIDER AREA START (slider-3) -->
{{-- <div class="ltn__slide-active-2 slick-slide-arrow-1 slick-slide-dots-1" style="background-image:url({{ asset('frontend/images/banner_background.jpg')}})">
<!-- ltn__slide-item -->
<div class="ltn__slide-item ltn__slide-item-10 section-bg-1 bg-image" data-bs-bg="{{ asset('img/slider/61.jpg')}}">
    <div class="ltn__slide-item-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 align-self-center">
                    <div class="slide-item-info">
                        <div class="slide-item-info-inner ltn__slide-animation">
                            <h5 class="slide-sub-title ltn__secondary-color animated text-uppercase">Up To 50% Off on
                                {{ $slider->brand_name }}</h5>
                            <h1 class="slide-title  animated">{{ $slider->product_name }}</h1>
                            @if($slider->discount_price == NULL)
                            <h5 class="color-orange  animated">Selling at ${{ $slider->selling_price }}</h5>
                            @else
                            <h5 class="color-orange  animated"><span>Discount at ${{ $slider->selling_price }}</span>
                                <span>${{ $slider->discount_price }}</span> </h5>
                            @endif
                            <div class="btn-wrapper  animated">
                                <a href="#" class="theme-btn-1 btn btn-effect-1 text-uppercase">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 align-self-center">
                    <div class="slide-item-img">
                        <a href="shop.html"><img src="{{ asset( $slider->image_one  )}}" alt="Image"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- SLIDER AREA END --> --}}
