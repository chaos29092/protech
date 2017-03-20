@extends('master')

@section('content')
    <main class="site-main page-spacing">
        <!-- PageBanner -->
        <div class="container-fluid no-padding pagebanner">
            <div class="container">
                <h3>定制案例</h3>
            </div>
        </div><!-- PageBanner /- -->
        <div class="container-fluid no-padding page-breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">主页</a></li>
                    <li class="active">定制案例</li>
                </ol>
            </div>
        </div><!-- PageBanner /- -->
        <!-- Portfolio Section -->
        <div class="container-fuild no-padding project-portfolio portfolio-section">
            <div class="container">
                <div class="row">
                    <ul id="filters" class="portfolio-categories sorting-menu">
                        <li><a data-filter="*" class="active" href="#">全部</a></li>
                        <li><a data-filter=".agrar" href="#">马弗炉</a></li>
                        <li><a data-filter=".automotive" href="#">真空炉</a></li>
                        <li><a data-filter=".chemical" href="#">Chemical</a></li>
                        <li><a data-filter=".construction" href="#">Construction</a></li>
                        <li><a data-filter=".energy" href="#">Energy</a></li>
                        <li><a data-filter=".exploration" href="#">Exploration</a></li>
                    </ul>
                    <ul class="portfolio-list no-padding">
                        <li class="col-md-4 col-sm-4 col-xs-6 chemical construction">
                            <div class="image-block">
                                <img src="images/project-1.jpg" alt="project" width="370" height="220"/>
                                <a href="images/project-1.jpg" class="zoom" title="定制简单描述"><span class="icon icon-Goto"></span></a>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 automotive construction">
                            <div class="image-block">
                                <img src="images/project-2.jpg" alt="project" width="370" height="220"/>
                                <a href="images/project-2.jpg" class="zoom" title="Project"><span class="icon icon-Goto"></span></a>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 chemical energy exploration">
                            <div class="image-block">
                                <img src="images/project-3.jpg" alt="project" width="370" height="220"/>
                                <a href="images/project-3.jpg" class="zoom" title="Project"><span class="icon icon-Goto"></span></a>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 automotive chemical exploration">
                            <div class="image-block">
                                <img src="images/project-4.jpg" alt="project" width="370" height="220"/>
                                <a href="images/project-4.jpg" class="zoom" title="Project"><span class="icon icon-Goto"></span></a>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 agrar energy exploration">
                            <div class="image-block">
                                <img src="images/project-5.jpg" alt="project" width="370" height="220"/>
                                <a href="images/project-5.jpg" class="zoom" title="Project"><span class="icon icon-Goto"></span></a>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 automotive chemical">
                            <div class="image-block">
                                <img src="images/project-6.jpg" alt="project" width="370" height="220"/>
                                <a href="images/project-6.jpg" class="zoom" title="Project"><span class="icon icon-Goto"></span></a>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 agrar construction energy">
                            <div class="image-block">
                                <img src="images/project-7.jpg" alt="project" width="370" height="220"/>
                                <a href="images/project-7.jpg" class="zoom" title="Project"><span class="icon icon-Goto"></span></a>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 automotive chemical exploration">
                            <div class="image-block">
                                <img src="images/project-8.jpg" alt="project" width="370" height="220"/>
                                <a href="images/project-8.jpg" class="zoom" title="Project"><span class="icon icon-Goto"></span></a>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 agrar construction exploration">
                            <div class="image-block">
                                <img src="images/project-9.jpg" alt="project" width="370" height="220"/>
                                <a href="images/project-9.jpg" class="zoom" title="Project"><span class="icon icon-Goto"></span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- Portfolio Section /- -->
    </main>
@endsection