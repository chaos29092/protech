@extends('new_sidebar')
@section('title',$page->title)
@section('description',$page->description)

@section('new_content')
    <div class="col-md-8 col-sm-8 content-area">
        <article class="type-post">
            <div class="entry-cover">
                <img src="{{$page->main_pic}}" alt="{{$page->name}}" width="791" height="421"/>
            </div>
            <div class="entry-block">
                <div class="entry-title">
                    <h3>{{$page->name}}</h3>
                </div>
                <div class="entry-content">
                    {!! $page->content !!}
                </div>
            </div>
        </article>
    </div>
@endsection