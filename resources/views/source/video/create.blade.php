@extends('adminlte::page')

@section('title', 'Create Videos')

@section('content_header')
    <h1>Create Videos</h1>
@stop

@section('content')
    <div class="container">

        <form action={{route('video.store')}} method='post' enctype="multipart/form-data">
            @csrf
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif

            <div class="form-group">
                <label for="pname">Video name</label>
                <input type="text" name="video_name" class="form-control" id="video_name"  placeholder="Enter video Name">
            </div>

            <!-- <div class="form-check">
                <input class="form-check-input" type="radio" value="Book" name="category" id="defaultCheck1">
                <label class="form-check-label font-weight-bold" for="defaultCheck1">
                    Book
                </label>
            </div> -->

            <div>
                <div class="form-group">
                    <label for="pimg">Video Image</label>
                    <input type="file" name = "image" class="form-control-file" id="pimg" >
                </div>

                <div class="form-group">
                    <label for="pdes">Description</label>
                    {{--    <input type="textarea" name = "description" class="form-control" id="summary-ckeditor"  placeholder="Product description">--}}
                    <textarea id="summary-ckeditor" name="description" class="form-control"></textarea>
                </div>

                <a href="{{route('video.index')}}" class="btn btn-warning">Cancel</a>
                <button type="submit" class="btn btn-primary">Add New Post</button>
            </div>
        </form>

    </div>

    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
        };
    </script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
