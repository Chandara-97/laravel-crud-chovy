@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="font-weight-bold text-center text-primary">List All High School Post</h1>
@stop

@section('content')
    <a href="{{route('highschool.create')}}" class="btn btn-success float-right">Add New Post</a>
    <table class="table" id="dataTable">
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
        <?php $k=0;?>
        @foreach($highschools as $highschool)
{{--            <?php $k++;?>--}}
{{--            @if($k<3)--}}
            <tr>
                <td>{{$i++}}</td>
                <td>{{$highschool->id}}</td>
                <td>{{$highschool->country_name}}</td>
                <td>{{$highschool->category}}</td>
                <td width = 300px>
                    <img src="{{asset("ScholarshiphighschoolImages/".$highschool->image)}}" alt="Image" class="img-responsive" width="100">
                </td>
                {{--                <td><?php echo $highschool->description ?></td>--}}
                {{--                <td>{{Str::limit($highschool->description,$limit = 20)}}</td>--}}
                <td><?php echo Str::limit($highschool->description,$limit = 20)?></td>
                <td>{{$highschool->author}}</td>
                {{--                <td>{{$highschool->author_id}}</td>--}}
                <td>{{$highschool->created_at}}</td>
                <td width = 300px>
                    <a href="{{route('highschool.show')}}" class="btn btn-primary">show</a>
                    <a href="{{route('highschool.edit', $highschool->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{route('highschool.delete', $highschool->id)}}" class="btn btn-danger"data-tr="tr_{{$highschool->id}}"
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
{{--               // @endif--}}
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
