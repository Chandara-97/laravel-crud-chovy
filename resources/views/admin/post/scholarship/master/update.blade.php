@extends('adminlte::page')

@section('title', 'Update product')

@section('content_header')
    <h1 class="font-weight-bold text-center text-primary">Update Post Master</h1>
@stop

@section('content')
    <form action={{route('master.update',$masters->id)}} method='post' enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PUT')}}

        <input type="hidden" name="id" id="id" value="{{$masters->id}}">
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <div class="form-group">
            <label for="pname">Country Name</label>
            <input type="text" name = "country_name" class="form-control" id="pname"  placeholder="Product name" value="{{$masters->country_name}}">
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" value="Master" name="category" id="defaultCheck1">
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                master
            </label>
        </div>

        <div>
            <div class="form-group">
                <label for="pimg">Product image</label>
                <input type="file" name = "image" class="form-control-file" id="pimg" value="{{asset("images/".$masters->image)}}">
            </div>

            <div class="form-group">
                <label for="pdes">Product description</label>
                <textarea id="summary-ckeditor" name="description" class="form-control"></textarea>
            </div>

            <a href="{{route('master.index')}}" class="btn btn-warning">Cancel</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
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
