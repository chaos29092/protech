@extends('master')
@section('title','联系我们')
@section('description','联系我们')

@section('content')
    <main class="site-main page-spacing">
        <!-- PageBanner -->
        <div class="container-fluid no-padding pagebanner">
            <div class="container">
                <h3>联系我们</h3>
            </div>
        </div><!-- PageBanner /- -->
        <div class="container-fluid no-padding page-breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">主页</a></li>
                    <li class="active">联系我们</li>
                </ol>
            </div>
        </div><!-- PageBanner /- -->
        <!-- ContactUs Section -->
        <div class="container-fluid no-padding contactus2">
            <div class="contactinfo-block container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="section-header">
                            <h3>我们的公司</h3>
                        </div>
                        <img src="images/our-office.jpg" alt="our-office" width="420" height="330"/>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="section-header">
                            <h3>在线留言</h3>
                        </div>
                        <form class="contactus-form" method="post" action="/contact_submit">
                            {{csrf_field()}}
                            <input type="hidden" name="url" value="{{url()->current()}}">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" required="" placeholder="名字" id="input_name" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="email" required="" placeholder="邮箱" id="input_email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea placeholder="留言内容" id="textarea_message" class="form-control" name="message" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="submit" name="post" title="Send" id="btn_submit2" value="发送留言">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h3>联系方式</h3>
                        </div>
                        <div class="getintouch">
                            <p><span>地址 :</span>郑州高新区</p>
                            <p><span>电话 :</span><a href="tel:888888" title="888888">888888</a></p>
                            <p><span>邮箱 :</span><a title="youremail@gmail.com" href="mailto:youremail@gmail.com">youremail@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ContactUs Section /- -->
    </main>
@endsection