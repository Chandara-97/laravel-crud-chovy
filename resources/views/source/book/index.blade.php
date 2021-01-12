@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <a href="{{route('book.create')}}" class="btn btn-success">Add New Post</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Book Name</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th scope="col">Author</th>
            <th scope="col">Created_At</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach($allbook as $books)
            <tr>
                <td>{{$books->id}}</td>
                <td>{{$books->book_name}}</td>
                <!-- <td>{{$books->category}}</td> -->
                <td width = 300px>
                    <img src="{{asset("BookImages/".$books->image)}}" alt="Image" class="img-responsive" width="100">
                </td>
{{--                <td><?php echo $books->description ?></td>--}}
{{--                <td>{{Str::limit($books->description,$limit = 20)}}</td>--}}
                <td><?php echo Str::limit($books->description,$limit = 20)?></td>
                <td>{{$books->author}}</td>
                <td>{{$books->created_at}}</td>
                <td width = 300px>


                    <a href="{{route('book.show')}}" class="btn btn-warning">Show</a>

                    <a href="{{route('book.show')}}" class="btn btn-primary">show</a>

                    <a href="{{route('book.edit', $books->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{route('book.delete', $books->id)}}" class="btn btn-danger"data-tr="tr_{{$books->id}}"
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
