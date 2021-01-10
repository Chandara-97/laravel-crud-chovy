@extends('adminlte::page')

@section('title', 'Dashboard')
@include('admin.post.scholarship.cdn')
@section('content_header')
    <h1 class="font-weight-bold text-center text-primary">List all Bachelor Posts </h1>
@stop

@section('content')
    <a href="{{route('bachelor.create')}}" class="btn btn-success float-right">Add New Post</a>
    <table class="table" id="table">
        <thead>
        <tr>
            <th scope="col">Noindex.blade.php</th>
            <th scope="col">ID</th>
            <th scope="col">Country Name</th>
            <th scope="col">Category</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th scope="col">Author</th>
{{--            <th scope="col">Author_ID</th>--}}
            <th scope="col">Created_At</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach($bachelors as $bachelor)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$bachelor->id}}</td>
                <td>{{$bachelor->country_name}}</td>
                <td>{{$bachelor->category}}</td>
                <td width = 300px>
                    <img src="{{asset("ScholarshipBachelorImages/".$bachelor->image)}}" alt="Image" class="img-responsive" width="100">
                </td>
{{--                <td><?php echo $bachelor->description ?></td>--}}
{{--                <td>{{Str::limit($bachelor->description,$limit = 20)}}</td>--}}
                <td><?php echo Str::limit($bachelor->description,$limit = 20)?></td>
                <td>{{$bachelor->author}}</td>
{{--                <td>{{$bachelor->author_id}}</td>--}}
                <td>{{$bachelor->created_at}}</td>
                <td width = 300px>
                    <a href="{{route('bachelor.show')}}" class="btn btn-primary">show</a>
                    <a href="{{route('bachelor.edit', $bachelor->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{route('bachelor.delete', $bachelor->id)}}" class="btn btn-danger"data-tr="tr_{{$bachelor->id}}"
                       data-toggle="confirmation"
                       data-btn-ok-label="Delete" data-btn-ok-icon="fa fa-remove"
                       data-btn-ok-class="btn btn-sm btn-danger"
                       data-btn-cancel-label="Cancel"
                       data-btn-cancel-icon="fa fa-chevron-circle-left"
                       data-btn-cancel-class="btn btn-sm btn-default"
                       data-title="Are you sure you want to delete ?"
                       data-placement="left" data-singleton="true">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="container">
        {{$bachelors->links() }}
    </div>

    <script>
        $(function() {
            $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url('datable') }}',
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                    { data: 'id', name: 'id' },
                    { data: 'country_name', name: 'country_name' },
                    { data: 'category', name: 'category' },
                    { data: 'author', name: 'author' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'image', name: 'image' },
                ]
            });
        });
    </script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
