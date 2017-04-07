@extends('master')
@section('controller','Admin Pages')
@section('content')
    <div id="content" class="site-content" role="main">
        <div class="row">

            <div class="xlarge-2 large-3 columns show-for-large-up sidebar-pos">
                <div class="shop_sidebar wpb_widgetised_column">
                    <aside class="widget woocommerce widget_product_categories"><h3 class="widget-title">Menu</h3>
                        <ul class="product-categories">
                            <li class="cat-item cat-item-167 cat-parent"><a href="{!! URL::route("admin.cate.list") !!}">Category<span
                                            class="child-indicator"></span></a>
                                <ul class="children" @if(isset($menuParent)) {{ ($menuParent=='Cate') ? "style=display:block" : "" }} @endif>
                                    <li class="cat-item cat-item-168"><a href="{!! URL::route("admin.cate.add") !!}">Add</a></li>
                                    <li class="cat-item cat-item-170"><a href="{!! URL::route("admin.cate.list") !!}">List</a></li>
                                </ul>
                            </li>
                            <li class="cat-item cat-item-171 cat-parent"><a href="{!! URL::route("admin.product.list") !!}">Product<span
                                            class="child-indicator"></span></a>
                                <ul class="children" @if(isset($menuParent)) {{ ($menuParent=='Product') ? "style=display:block" : "" }} @endif>
                                    <li class="cat-item cat-item-171"><a href="{!! URL::route("admin.product.add") !!}">Add</a></li>
                                    <li class="cat-item cat-item-171"><a href="{!! URL::route("admin.product.add") !!}">List</a></li>
                                </ul>
                            </li>
                            <li class="cat-item cat-item-192 cat-parent"><a href="">Order<span
                                            class="child-indicator"></span></a> <span class="count">(11)</span>
                            </li>
                            <li class="cat-item cat-item-180"><a href="">Spec</a></li>
                            <li class="cat-item cat-item-167 cat-parent"><a href="">Users<span
                                            class="child-indicator"></span></a>
                                <ul class="children">
                                    <li class="cat-item cat-item-168"><a href="">Add</a></li>
                                    <li class="cat-item cat-item-169"><a href="">Edit</a></li>
                                    <li class="cat-item cat-item-170"><a href="">List</a></li>
                                </ul>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>

            <div class="xlarge-10 large-9 columns content-pos">
                <div class="top_bar_shop">
                    <div class="catalog-ordering">
                        <h3>@yield('handle') </h3>
                    </div> <!--catalog-ordering-->
                </div>
                @yield('contentA')
            </div><!-- .large-9 or .large-12 -->


        </div><!-- .row -->
    </div>
@endsection()