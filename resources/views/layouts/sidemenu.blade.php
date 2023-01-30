@php

$category = DB::table('categories')->get();

@endphp


<!-- CATEGORY-MENU-LIST START -->
<div class="ltn__category-menu-wrap">
    <div class="ltn__category-menu-title">
        <h2 class="section-bg-1 ltn__secondary-bg text-color-white">categories</h2>
    </div>
    <div class="ltn__category-menu-toggle ltn__one-line-active">
        <ul>
            @foreach($category as $cat)
            <!-- Submenu Column - unlimited -->
            <li class="ltn__category-menu-item ltn__category-menu-drop">
                <a href="{{ url('allcategory/'.$cat->id) }}"><i class="icon-shopping-bags"></i>{{ $cat->category_name }}</a>
                <ul class="ltn__category-submenu ltn__category-column-5">
                    <li class="ltn__category-submenu-title ltn__category-menu-drop"><a href="{{ url('allcategory/'.$cat->id) }}">{{ $cat->category_name }}</a>
                        <ul class="ltn__category-submenu-children">

                        @php
                        $subcategory = DB::table('subcategories')->where('category_id',$cat->id)->get();
                        @endphp

                            @foreach($subcategory as $row)
                            <li><a href="{{ url('products/'.$row->id) }}">{{ $row->subcategory_name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </li>
            @endforeach
            <li class="ltn__category-menu-more-item-parent">
                <a class="rx-default">
                    More categories <span class="cat-thumb  icon-plus"></span>
                </a>
                <a class="rx-show">
                    close menu <span class="cat-thumb  icon-remove"></span>
                </a>
            </li>
            <!-- Single menu end -->
        </ul>
    </div>
</div>
<!-- END CATEGORY-MENU-LIST -->
