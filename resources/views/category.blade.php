@extends('product_sidebar')
@section('title',$category->title)
@section('description',$category->description)

@section('pageName',$category->name)
@section('product_content')
    <div class="content-area col-md-9 col-sm-8 col-xs-12">
        <ul class="products row">
            @foreach($products as $product)
            <li class="product">
                <a href="/products/{{$product->id}}" title="{{$product->name}}">
                    <img alt="{{$product->name}}" src="{{$product->category_pic}}"/>
                    <h3>{{$product->name}}</h3>
                </a>
            </li>
            @endforeach
        </ul>

        <nav class="ow-pagination">
            {{ $products->links() }}
        </nav>
    </div>
@endsection