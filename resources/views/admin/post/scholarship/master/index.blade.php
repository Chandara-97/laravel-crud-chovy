@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="font-weight-bold text-center text-primary">List All Master Post</h1>
@stop

@section('content')
    <a href="{{route('master.create')}}" class="btn btn-success float-right">Add New Post</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">No</th>
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
        @foreach($masters as $master)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$master->id}}</td>
                <td>{{$master->country_name}}</td>
                <td>{{$master->category}}</td>
                <td width = 300px>
                    <img src="{{asset("ScholarshipmasterImages/".$master->image)}}" alt="Image" class="img-responsive" width="100">
                </td>
                {{--                <td><?php echo $master->description ?></td>--}}
                <td>{{Str::limit($master->description,$limit = 20)}}</td>
                <td>{{$master->author}}</td>
                {{--                <td>{{$master->author_id}}</td>--}}
                <td>{{$master->created_at}}</td>
                <td width = 300px>
                    <a href="{{route('master.show')}}" class="btn btn-primary">show</a>
                    <a href="{{route('master.edit', $master->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{route('master.delete', $master->id)}}" class="btn btn-danger"data-tr="tr_{{$master->id}}"
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
    <script type="text/javascript">
        $(document).ready(function () {
            $('[data-toggle=confirmation]').confirmation({
                rootSelector: '[data-toggle=confirmation]',
                onConfirm: function (event, element) {
                    element.trigger('confirm');
                }
            });


            $(document).on('confirm', function (e) {
                var ele = e.target;
                e.preventDefault();


                $.ajax({
                    url: ele.href,
                    type: 'DELETE',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function (data) {
                        if (data['success']) {
                            $("#" + data['tr']).slideUp("slow");
                            alert(data['success']);
                        } else if (data['error']) {
                            alert(data['error']);
                        } else {
                            alert('Whoops Something went wrong!!');
                        }
                    },
                    error: function (data) {
                        alert(data.responseText);
                    }
                });


                return false;
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
