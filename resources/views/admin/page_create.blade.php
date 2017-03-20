@extends('layouts.admin_master')

@section('add_css')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link href="{{asset('backend/css/plugins/summernote/summernote.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/plugins/summernote/summernote-bs3.css')}}" rel="stylesheet">

@endsection

@section('header')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Pages Create</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="/home">Home</a>
                </li>
                <li class="active">
                    <strong>Pages Create</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
@endsection
@section('content')

    <div class="wrapper wrapper-content animated fadeInRight ecommerce">

        <div class="row">
            <div class="col-lg-12">
                <div class="tabs-container">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="ecommerce_product.html#tab-1"> Page info</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                                <fieldset class="form-horizontal">
                                    <form action="/admin/pages" method="POST" enctype="multipart/form-data">

                                        <div class="form-group"><label class="col-sm-2 control-label">标题:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Page name" name="name" ></div>
                                    </div>

                                        <div class="form-group"><label class="col-sm-2 control-label">优先级，越小越前:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="sort" value="50"></div>
                                        </div>

                                    <div class="form-group"><label class="col-sm-2 control-label">Tag(没必要不要私自改动):</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="tag">
                                                <option value="1">新闻</option>
                                                <option value="2">技术文章</option>
                                            </select>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                         <label class="col-sm-2 control-label" for="main_pic">主图（2:1的大图，800左右宽度最佳）</label>
                                         <div class="col-sm-10"><input name="main_pic" type="file" /></div>
                                     </div>

                                    <div class="form-group"><label class="col-sm-2 control-label">Description(只能编辑时插入图片，新建时不行):</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="2" id="content" name="content"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-sm-2 control-label">SEO:Meta Title:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Meta Title" name="title" ></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">SEO:Meta Description:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Meta Description" name="description" ></div>
                                    </div>


                                        <input type="submit" name="send" id="send" value="Publish" class="btn btn-sm btn-primary pull-right m-t-n-xs">
                                        {!! csrf_field() !!}
                                    </form>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('add_js')
    <!-- SUMMERNOTE -->
    <script src="{{asset('backend/js/plugins/summernote/summernote.min.js')}}"></script>

    <script>

        $(document).ready(function(){
            $('#content').summernote({
                height: 300,
                placeholder:'Content here...',
            });
        })

    </script>
@endsection
