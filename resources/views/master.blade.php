<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <title>@yield('title') - 诺泰科技</title>

    <!-- Standard Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}" />
    <!-- For iPhone 4 Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/apple-icon-114x114.png')}}">
    <!-- For iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/apple-icon-72x72.png')}}">
    <!-- For iPhone: -->
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/apple-icon-57x57.png')}}">
    <!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="{{asset('libraries/lib.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('libraries/Stroke-Gap-Icon/stroke-gap-icon.css')}}">

    <!-- Custom - Common CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/navigation-menu.css')}}">

    <!-- Custom - Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/shortcode.css')}}">

    <!--[if lt IE 9]>
    <script src="{{asset('js/html5/respond.min.js')}}"></script>
    <![endif]-->

</head>

<body class="woocommerce" data-offset="200" data-spy="scroll" data-target=".ow-navigation">

<!-- Header -->
<header class="header-main container-fluid no-padding">
    <!-- SidePanel -->
    <div id="slidepanel">
        <!-- Top Header -->
        <div class="top-header container-fluid no-padding">
            <!-- Container -->
            <div class="container">
                <span>Your Trusted 24 Hours Service Provider!</span>
                <div class="header-contact-info">
                    <span>Emailus:</span><a href="mailto:Support@info.com" title="Support@info.com">Support@info.com</a>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            English
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">English</a></li>
                            <li><a href="#">Spain</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- Container /- -->
        </div><!-- Top Header /- -->

        <!-- Middel Header /- -->
        <div class="middle-header container-fluid no-padding">
            <div class="container">
                <div class="logo-block">
                    <a href="/"><img src="{{asset('images/logo.png')}}" alt="logo" height="60" width="196"/></a>
                </div>
                <div class="header-info">
                    <a href="/contact_us" title="咨询产品">咨询产品</a>
                    <ul>
                        <li><h3>Number #1 Provider</h3><span>of Industrial Solution</span></li>
                        <li><h3>Global Certificate</h3><span>ISO 9001:2015</span></li>
                        <li><h3>Award Winning</h3><span>Solution Of The Year</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header-social">
                <ul>
                    <li><a href="tel:电话号码" title="phone"><i class="fa icon_phone" aria-hidden="true"></i></a></li>
                    <li><a href="mailto:info@email.com" title="email"><i class="fa icon_mail" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Menu Block -->
    <div class="menu-block menu-block-section container-fluid no-padding">
        <!-- Container -->
        <div class="container">
            <span><i class="fa fa-home" aria-hidden="true"></i></span>
            <nav class="navbar ow-navigation">
                <div id="loginpanel" class="desktop-hide">
                    <div class="right" id="toggle">
                        <a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
                        <a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
                    </div>
                </div>
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="text-logo desktop-hide" href="/">Manufactor</a>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="nav navbar-nav menubar">
                        <li><a title="主页" href="/">主页</a></li>
                        <li><a title="产品" href="/categories">产品</a></li>
                        <li><a title="定制案例" href="/custom_cases">定制案例</a></li>
                        <li><a title="关于我们" href="/about_us">关于我们</a></li>
                        <li><a title="新闻" href="/news_and_tech">新闻</a></li>
                        <li><a title="联系我们" href="/contact_us">联系我们</a></li>
                    </ul>
                </div>
            </nav><!-- Navigation /- -->
            <div class="menu-search">
                <div id="sb-search" class="sb-search">
                    <form>
                        <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search" />
                        <button class="sb-search-submit"><i class="fa fa-search"></i></button>
                        <span class="sb-icon-search"></span>
                    </form>
                </div>
            </div>
        </div><!-- Container /- -->
    </div><!-- Menu Block /- -->
</header><!-- Header /- -->

@yield('content')

<!-- Footer Main -->
<footer class="footer-main container-fluid no-padding">
    <div class="container">
        <div class="row">
            <!-- Widget About -->
            <aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget about-widget">
                <h3>关于诺泰</h3>
                <p>At vero eos et accusamus et iusto elity lit agnissmos ducimus  quidtiis praesetium ptatum mole deeniti. Ducimus os quidtiis praesetium ptatum mole deeniti hates lites fortune .</p>
                <a href="#" title="Learn More">Learn More</a>
            </aside><!-- Widget About /- -->

            <!-- Widget Links -->
            <aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget link-widget">
                <h3>快捷链接</h3>
                <ul>
                    <li><a href="/categories" title="产品">产品</a></li>
                    <li><a href="/custom_cases" title="定制案例">定制案例</a></li>
                    <li><a href="/about_us" title="关于我们">关于我们</a></li>
                    <li><a href="/news_and_tech" title="关于我们">新闻</a></li>
                    <li><a href="/contact_us" title="联系我们">联系我们</a></li>
                </ul>
            </aside><!-- Widget Links /- -->

            <!-- Widget Contact -->
            <aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget contact-widget">
                <h3>联系方式</h3>
                <p><span class="icon icon-Pointer"></span>地址 : 44 New Design Street, Melbourne 005</p>
                <p><span class="icon icon-Phone2"></span>电话 : <a href="tel:+01800433633" title="01800433633">(01) 800 433 633</a></p>
                <p><span class="icon icon-Mail"></span>邮箱 : <a href="mailto:info@anous.com" title="info@anous.com">info@anous.com</a></p>
                <p><span class="icon icon-Printer"></span>传真 : <a href="tel:+01800854633" title="01800854633">(01) 800 854 633</a></p>
            </aside><!-- Widget Contact /- -->

            <!-- Widget Isnstagram -->
            <aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget instagram-widget">
                <h3>诺泰风采</h3>
                <ul>
                    <li><a href="#" title="instagram"><img src="{{asset('images/instagram-1.jpg')}}" alt="Insta1" width="90" height="90"/></a></li>
                    <li><a href="#" title="instagram"><img src="{{asset('images/instagram-1.jpg')}}" alt="Insta1" width="90" height="90"/></a></li>
                    <li><a href="#" title="instagram"><img src="{{asset('images/instagram-1.jpg')}}" alt="Insta1" width="90" height="90"/></a></li>
                    <li><a href="#" title="instagram"><img src="{{asset('images/instagram-1.jpg')}}" alt="Insta1" width="90" height="90"/></a></li>
                    <li><a href="#" title="instagram"><img src="{{asset('images/instagram-1.jpg')}}" alt="Insta1" width="90" height="90"/></a></li>
                    <li><a href="#" title="instagram"><img src="{{asset('images/instagram-1.jpg')}}" alt="Insta1" width="90" height="90"/></a></li>
                </ul>
            </aside><!-- Widget Newsletter /- -->
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <span>Copyright &copy; 2017. All Rights Reserved.</span>
            <p>
                <a href="#" title="Terms Of Use ">Terms Of Use</a>
                <a href="#" title="Privacy & Security Statement">Privacy & Security Statement</a>
            </p>
        </div>
    </div>
</footer><!-- Footer Main /- -->
<!-- JQuery v1.11.3 -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Library - Js -->
<script src="{{asset('libraries/lib.js')}}"></script><!-- Bootstrap JS File v3.3.5 -->


<!-- Library - Theme JS -->
<script src="{{asset('js/functions.js')}}"></script>
</body>
</html>