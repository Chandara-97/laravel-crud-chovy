@extends('adminlte::page')

@section('title', 'Update product')

@section('content_header')
    <h1>Update product</h1>
@stop

@section('content')
<form action={{route('products.update',$allpro->id)}} method='post' enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PUT')}}

    <input type="hidden" name="id" id="id" value="{{$allpro->id}}">
    @if(Session::has('success'))
            <div class="alert alert-success">
              {{Session::get('success')}}
            </div>
    @endif
  <div class="form-group">
    <label for="pname">Product name</label>
    <input type="text" name = "name" class="form-control" id="pname"  placeholder="Product name" value="{{$allpro->name}}">
  </div>

  <div>
  <div class="form-group">
    <label for="pimg">Product image</label>
    <input type="file" name = "img_url" class="form-control-file" id="pimg" value="{{asset("images/".$allpro->img_url)}}">
  </div>

  <div class="form-group">
    <label for="pdes">Product description</label>
    <input type="textarea" name = "description" class="form-control" id="summary-ckeditor"  placeholder="Product description" value="{{$allpro->description}}">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
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
