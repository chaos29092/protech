@extends('layouts.admin_master')

@section('add_css')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link href="{{asset('backend/css/plugins/summernote/summernote.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/plugins/summernote/summernote-bs3.css')}}" rel="stylesheet">

    <link href="{{asset('backend/css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
@endsection

@section('header')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Pages Edit</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="/home">Home</a>
                </li>
                <li class="active">
                    <strong>Pages Edit</strong>
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
                        <li class="active"><a data-toggle="tab" href="#tab-1"> Page info</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-2"> Images</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                                <fieldset class="form-horizontal">
                                    <form action="/admin/pages/{{$page->id}}" method="POST" enctype="multipart/form-data">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="_method" value="put" />

                                        <div class="form-group"><label class="col-sm-2 control-label">标题:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Page name" name="name" value="{{$page->name}}"></div>
                                    </div>

                                        <div class="form-group"><label class="col-sm-2 control-label">优先级，越小越前:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="sort" value="{{$page->sort}}"></div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="main_pic">主图（2:1的大图，800左右宽度最佳）</label>
                                            <div class="col-sm-2"><input name="main_pic" type="file" /></div>
                                            @if($page['main_pic'])
                                                <img class="col-sm-2" src="{{$page['main_pic']}}" alt="{{$page['name']}}">
                                            @endif
                                        </div>

                                    <div class="form-group"><label class="col-sm-2 control-label">Description:</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="2" id="content" name="content">{!! $page->content !!}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-sm-2 control-label">SEO:Meta Title:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Meta Title" name="title" value="{{$page->title}}"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">SEO:Meta Description:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Meta Description" name="description" value="{{$page->description}}"></div>
                                    </div>

                                        <input type="submit" name="send" id="send" value="Publish" class="btn btn-sm btn-primary pull-right m-t-n-xs">
                                    </form>
                                    <form action="/admin/pages/{{$page['id']}}" method="POST">
                                        <input type="hidden" name="_method" value="delete" />
                                        {!! csrf_field() !!}
                                        <script language="javascript">
                                            function delcfm() {
                                                if (!confirm("确认要删除？")) {
                                                    window.event.returnValue = false;
                                                }
                                            }
                                        </script>
                                        <button type="submit" onClick="delcfm()" class="btn btn-sm btn-danger pull-right m-t-n-xs">Delete</button>
                                    </form>
                                </fieldset>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane">
                            <div class="panel-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered table-stripped">
                                        <thead>
                                        <tr>
                                            <th>
                                                Image preview
                                            </th>
                                            <th>
                                                Image url
                                            </th>
                                            <th>
                                                Actions
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($files as $f)
                                            <tr>
                                                <td>
                                                    <img src="{{'/app/'.$f}}" width="100">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" disabled value="{{url('/app/'.$f)}}" >
                                                </td>
                                                <td>
                                                    <form action="/admin/pages/images" method="POST">
                                                        {!! csrf_field() !!}
                                                        {{ method_field('DELETE') }}
                                                        <input type="hidden" name="file_name" value="{{$f}}" />
                                                        <button type="submit" class="btn btn-white"><i class="fa fa-trash"></i> </button></form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

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

    <!-- Data picker -->
    <script src="{{asset('backend/js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            function sendFile(file, editor, welEditable) {
                data = new FormData();
                data.append("file", file);
                $.ajax({
                    data: data,
                    type: "POST",
                    url: "/admin/pages/images/{{$page->id}}",
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(url) {
                        editor.insertImage(welEditable, url);
                    }
                });
            }
            $('#content').summernote({
                height: 300,
                onImageUpload: function(files, editor, welEditable) {
                    sendFile(files[0], editor, welEditable);
                }
            });
        });
    </script>
@endsection
