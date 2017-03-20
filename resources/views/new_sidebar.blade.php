@extends('master')

@section('content')
    <main class="site-main page-spacing">
        <!-- PageBanner -->
        <div class="container-fluid no-padding pagebanner">
            <div class="container">
                <h3>诺泰新闻</h3>
            </div>
        </div><!-- PageBanner /- -->
        <div class="container-fluid no-padding page-breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">主页</a></li>
                    <li class="active">新闻列表</li>
                </ol>
            </div>
        </div><!-- PageBanner /- -->
        <!-- Blog Section -->
        <div class="container latestnews-section blog">
            <div class="row">
                @yield('new_content')

                <div class="col-md-4 col-sm-4 widget-area">
                    <aside class="widget widget_categories">
                        <h3 class="widget-title">文章分类</h3>
                        <ul>
                            <li><a href="/news" title="Materials">公司新闻</a></li>
                            <li><a href="/tech" title="Environment">技术文章</a></li>
                        </ul>
                    </aside>
                    <aside class="widget widget_recent">
                        <h3 class="widget-title">重要新闻</h3>
                        <div class="recent-block">
                            <a href="blogpost-page.html"><img width="81" height="81" alt="latestpost-1" src="{{asset('images/latestpost-1.jpg')}}"></a>
                            <div class="recent-content">
                                <h3><a href="blogpost-page.html" title="Multitasking materials in constrution and architecture">Multitasking materials in constrution and architecture</a></h3>
                                <a href="#" title="25th May 2016">25th May 2016</a>
                            </div>
                        </div>
                        <div class="recent-block">
                            <a href="blogpost-page.html"><img width="81" height="81" alt="latestpost-2" src="{{asset('images/latestpost-2.jpg')}}"></a>
                            <div class="recent-content">
                                <h3><a href="blogpost-page.html" title="Materials and Manufacturing Education">Materials and Manufacturing Education</a></h3>
                                <a href="#" title="26th May 2016">26th May 2016</a>
                            </div>
                        </div>
                        <div class="recent-block">
                            <a href="blogpost-page.html"><img width="81" height="81" alt="latestpost-3" src="{{asset('images/latestpost-3.jpg')}}"></a>
                            <div class="recent-content">
                                <h3><a href="blogpost-page.html" title="Big changes in ranking of top Industry">Big changes in ranking of top Industry</a></h3>
                                <a href="#" title="10th June 2016">10th June 2016</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div><!-- Blog Section /- -->
    </main>
@endsection