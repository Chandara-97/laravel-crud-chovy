@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <a href="{{route('products.create')}}" class="btn btn-success">Add New Post</a>
    <table class="table" id="list_all_post_info">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Author</th>
      <th scope="col">Description</th>
      <th scope="col">Created_At</th>
      <th scope="col">Action</th>
      <th scope="col">Option</th>
    </tr>
  </thead>

  @foreach($allpro as $pro)
  
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
      
        <a href="{{route('products.delete', $pro->id)}}">Delete</a>
      </div>
    </div>
  </div>
</div>

    <tr>
      <td>{{$pro->id}}</td>
      <td width = 300px>
        <img src="{{asset("images/".$pro->img_url)}}" alt="Image" class="img-responsive" width="100">
      </td>
      <td>{{$pro->name}}</td>
      <td>{{$pro->user_id}}</td>
      <td><?php echo $pro->description ?></td>
      <td>{{$pro->created_at}}</td>

      <td width = 300px>
          <a href="{{route('products.scholarship')}}" class="btn btn-primary">Show</a>
          <a href="{{route('products.edit', $pro->id)}}" class="btn btn-warning">Edit</a>
          <a href="{{route('products.delete', $pro->id)}}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Delete</a>
      </td>

      <td width = 300px>
          <a href="{{route('products.scholarship')}}" class="btn btn-primary">Draft</a>
          <a href="{{route('products.edit', $pro->id)}}" class="btn btn-warning">Publish</a>
          
    </tr>
  @endforeach
</table>
    


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
@stop
