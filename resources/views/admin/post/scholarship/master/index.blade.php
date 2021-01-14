@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="font-weight-bold text-center text-primary">List All Master Post</h1>
@stop

@section('content')
    <a href="{{route('master.create')}}" class="btn btn-success float-right">Add New Post</a>
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
        @foreach($masters as $master)
        
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      
        <a href="{{route('master.delete', $master->id)}}">Delete</a>
      </div>
    </div>
  </div>
</div>


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
                    <a href="{{route('master.show')}}" class="btn btn-primary">Show</a>
                    <a href="{{route('master.edit', $master->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{route('master.delete', $master->id)}}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Delete</a>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@stop
