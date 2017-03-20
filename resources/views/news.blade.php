@extends('new_sidebar')
@section('title','文章列表')
@section('description','文章列表')

@section('new_content')
    <div class="col-md-8 col-sm-8 content-area">
        @foreach($articles as $article)
        <article class="type-post">
            <div class="entry-cover">
                <a href="/articles/{{$article->id}}" title="{{$article->name}}"><img src="{{$article->main_pic}}" alt="{{$article->name}}" width="791" height="421"/></a>
                <a href="/articles/{{$article->id}}"><span class="icon_plus" aria-hidden="true"></span></a>
            </div>

            <div class="entry-block">
                <div class="entry-title">
                    <a href="/articles/{{$article->id}}" title="{{$article->name}}"><h3>{{$article->name}}</h3></a>
                </div>
                <div class="entry-content">
                    <p>{{$article->description}}[...]</p>
                </div>
                <a href="/articles/{{$article->id}}" title="Read More">文章详情<span class="arrow_right" aria-hidden="true"></span></a>
            </div>
        </article>
        @endforeach
        <nav class="ow-pagination">
            {{ $articles->links() }}
        </nav>
    </div>
@endsection