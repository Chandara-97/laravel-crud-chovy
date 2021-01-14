@extends('adminlte::page')

@section('title', 'Dashboard')
@include('admin.post.scholarship.cdn')
@section('content_header')
    <h1 class="font-weight-bold text-center text-primary">List all Bachelor Posts </h1>
@stop

@section('content')
    <a href="{{route('bachelor.create')}}" class="btn btn-success float-right">Add New Post</a>
    <table class="table" id="dataTable">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email<th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach($admins as $admin)
            <tr>
                <td>{{$admin->id}}</td>
                <td>{{$admin->name}}</td>
                <td>{{$admin->email}}</td>
                <td>{{$admin->role}}</td>
                <td width = 300px>
                    <a href="{{route('bachelor.edit', $bachelor->id)}}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="container">
        {{$admins->links() }}
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@stop
