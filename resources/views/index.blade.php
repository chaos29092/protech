@extends('master')
@section('title','马弗炉，真空炉，气氛炉')
@section('description','马弗炉，真空炉，气氛炉')

@section('content')
    <main class="site-main page-spacing">
        <!-- Slider Section -->
        <div id="slider-section" class="slider-section container-fluid no-padding">
            <div id="home-slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/slider-1.jpg" alt="slide1" width="1920" height="570"/>
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="col-md-7 col-sm-8 col-xs-12 ow-pull-right">
                                    <h4 data-animation="animated bounceInLeft">The Manufactory Solutions</h4>
                                    <h3 data-animation="animated fadeInDown">High Quality Materials In All Solutions</h3>
                                    <p data-animation="animated bounceInRight">Efficiently unleash information without cross-media value. Quickly maximize timely eliverables for real-time schemas.</p>
                                    <a href="#" title="View More" data-animation="animated zoomInUp">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider-2.jpg" alt="slide2" width="1920" height="570"/>
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="col-md-7 col-sm-8 col-xs-12 ow-pull-left">
                                    <h3 data-animation="animated bounceInDown">We Provide <span>Extended Maintenance</span>Programs.</h3>
                                    <p data-animation="animated bounceInDown">Efficiently unleash information without cross-media value. Quickly maximize timely eliverables for real-time schemas.</p>
                                    <a href="#" title="View More" data-animation="animated zoomInRight">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider-3.jpg" alt="slide3" width="1920" height="570"/>
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="col-md-7 col-sm-8 col-xs-12 ow-pull-right">
                                    <h4 data-animation="animated bounceInLeft">The Manufactory Solutions</h4>
                                    <h3 data-animation="animated bounceInRight">High Quality Materials In All Solutions</h3>
                                    <p data-animation="animated bounceInLeft">Efficiently unleash information without cross-media value. Quickly maximize timely eliverables for real-time schemas.</p>
                                    <a href="#" title="View More" data-animation="animated fadeInUp">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#home-slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right carousel-control" href="#home-slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div><!-- Slider Section /- -->
        <!-- Introduction Section -->
        <div class="container introduction-section">
            <div class="row">
                @foreach($categories as $category)
                <div class="col-md-4 col-sm-6 col-xs-6 introdction-block">
                    <a href="/products/categories/{{$category->id}}"><img src="{{$category->category_pic}}" alt="{{$category->name}}" width="370" height="281"/></a>
                    <h3><a href="/products/categories/{{$category->id}}" title="{{$category->name}}">{{$category->name}}</a></h3>
                    <span>{{$category->category_des}}</span>
                </div>
                @endforeach
            </div>
        </div><!-- Introduction Section /- -->

        <!-- Client Section -->
        <div class="container-fuild no-padding client-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-3 col-xs-12">
                        <h3>我们的客户</h3>
                    </div>
                    <div class="col-md-10 col-sm-9 col-xs-12">
                        <div class="client-logo-block">
                            <div class="logg-box">
                                <img src="{{asset('images/client-1.png')}}" alt="client" width="119" height="32"/>
                            </div>
                            <div class="logg-box">
                                <img src="images/client-2.png" alt="client" width="119" height="32"/>
                            </div>
                            <div class="logg-box">
                                <img src="images/client-3.png" alt="client" width="119" height="32"/>
                            </div>
                            <div class="logg-box">
                                <img src="images/client-4.png" alt="client" width="119" height="32"/>
                            </div>
                            <div class="logg-box">
                                <img src="images/client-5.png" alt="client" width="119" height="32"/>
                            </div>
                            <div class="logg-box">
                                <img src="images/client-1.png" alt="client" width="119" height="32"/>
                            </div>
                            <div class="logg-box">
                                <img src="images/client-2.png" alt="client" width="119" height="32"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Client Section /- -->

        <!-- AboutUs Section -->
        <div class="container aboutus-section">
            <div class="row">
                <div class="col-md-6 aboutus-image">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <img src="images/aboutus-1.jpg" alt="aboutus" width="290" height="380"/>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <img src="images/aboutus-2.jpg" alt="aboutus" width="290" height="380"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 aboutus-content">
                    <h3>诺泰强大的研发能力，完善的定制流程可以为你制造最合适的设备。</h3>
                    <p>我们有齐全的实验室加热产品线，如果常规炉型无法满足您的需求，我们有十年以上的研发经验，专业的设计部门，可以为您进行炉型改造，功能添加，功能定制，控制程序定制，生产出最适合您的设备。</p>
                    <div class="about-points">
                        <a href="#" title="常规炉型">常规产品</a>
                        <a href="#" title="炉型定制">炉型定制</a>
                        <a href="#" title="关于我们">关于我们</a>
                        <a href="#" title="联系我们">联系我们</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- AboutUs Section /- -->

    </main>
@endsection