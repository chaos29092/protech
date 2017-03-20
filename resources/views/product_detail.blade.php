@extends('product_sidebar')
@section('title',$product->title)
@section('description',$product->description)

@section('Crumbs')
    <li><a href="/products/categories/{{$category->id}}">{{$category->name}}</a></li>
@endsection
@section('pageName',$product->name)
@section('product_content')
    <div class="content-area col-md-9 col-sm-8 col-xs-12">
        <div class="type-product product">
            <div class="images">
                <img src="{{$product->main_pic}}" alt="{{$product->name}}" />
            </div>
            <div class="summary entry-summary">
                <h1 class="product_title entry-title">{{$product->name}}</h1>

                <div class="product-content">
                    <p>{{$product->des}}</p>
                </div>


                    <button class="single_add_to_cart_button button alt" ><i class="icon_mail"></i>联系我们</button>

            </div>

            <!-- Tabs -->
            <div class="woocommerce-tabs wc-tabs-wrapper">
                <ul class="tabs wc-tabs">
                    <li class="description_tab active">
                        <a href="#tab-description">产品详情</a>
                    </li>
                    <li class="reviews_tab">
                        <a href="#tab-table">产品参数</a>
                    </li>
                </ul>
                <div id="tab-description" class="panel entry-content wc-tab" style="display: block">
                    {!! $product->content !!}
                </div>
                <div id="tab-table" class="panel entry-content wc-tab">
                    {!! $product->table !!}
                </div>
            </div>
            <!-- Tabs /- -->

            <!-- Related Product -->
            <div class="related-product">
                <h2>相关产品</h2>
                <ul class="products row">
                    @foreach($related_products as $related_product)
                    <li class="product">
                        <a href="/products/{{$related_product->id}}" title="{{$related_product->name}}">
                            <img alt="shop" src="{{$related_product->category_pic}}" />
                            <h3>{{$related_product->name}}</h3>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div><!-- Related Product /- -->
        </div>
    </div>
@endsection