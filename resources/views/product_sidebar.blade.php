@extends('master')

@section('content')
    <main class="site-main page-spacing">
        <!-- PageBanner -->
        <div class="container-fluid no-padding pagebanner">
            <div class="container">
                <h3>@yield('pageName')</h3>
            </div>
        </div><!-- PageBanner /- -->
        <div class="container-fluid no-padding page-breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">主页</a></li>
                    @yield('Crumbs')
                    <li class="active">@yield('pageName')</li>
                </ol>
            </div>
        </div><!-- PageBanner /- -->


        <div id="product-section" class="product-section container-fluid no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12 widget-area">
                        <aside class="widget pro_widget_categories">
                            <div class="widget-title">
                                <h3>产品分类</h3>
                            </div>
                            <ul>
                                @foreach($categories as $category)
                                <li><a href="/products/categories/{{$category->id}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </aside>
                        <aside class="widget widget-best-seller">
                            <div class="widget-title">
                                <h3>热销产品</h3>
                            </div>
                                <div class="seller-box">
                                    <div class="product-img"><a href="#" title="Product"><img src="{{asset('images/rated-thumb2.jpg')}}"
                                                                                              alt="Seller"/></a></div>
                                    <a href="shop-details.html"><h4>低温马弗炉</h4></a>
                                </div>
                                <div class="seller-box">
                                    <div class="product-img"><a href="#" title="Product"><img src="{{asset('images/rated-thumb2.jpg')}}"
                                                                                              alt="Seller"/></a></div>
                                    <a href="shop-details.html"><h4>低温马弗炉</h4></a>
                                </div>
                                <div class="seller-box">
                                    <div class="product-img"><a href="#" title="Product"><img src="{{asset('images/rated-thumb3.jpg')}}"
                                                                                              alt="Seller"/></a></div>
                                    <a href="shop-details.html"><h4>乱七八糟的马弗炉啊啊啊啊</h4></a>
                                </div>
                            </aside>
                        </div>

                        @yield('product_content')
                    </div>
                </div>
            </div>
        </main>
    @endsection