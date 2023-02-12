@extends('pages.layout')
@section('title','Admin');
  @section('nav')
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand text-wrap text-uppercase" href="#">Ma7laba</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">A propos nous</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  @endsection
@section('content')
<section class="mt-4">
    <div class="d-flex justify-content-between px-5 py-6 my-4 mx-4"> 
        <div>
            <button type="button" class="btn btn-dark">Delete All</button>
        </div>
        <div>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ADD" data-bs-whatever="">Add</button>
        </div>
    </div>
    <div class="mx-4 my-5">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">image</th>
                <th scope="col">event</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($fetsh as $item)
              <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->title}}</td>
                <td>{{$item->description}}</td>
                <td style="heigth: 40px;"><img height="100" src="{{asset($item->path)}}"></td>
                <td>
                    <div>
                        <a type="button" class="btn btn-warning" href="{{route('posts.edit',$item->id)}}" data-bs-toggle="modal" data-bs-target="#edit" data-bs-whatever="">Edit</a>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
      <div class="row gap-4 mx-4 my-5">
        @foreach($fetsh as $item)
        <div class="col-3">
          <div class="card" >
            <div style="heigth: 40px;">
              <img height="100" src="{{asset($item->path)}}" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">C{{$item->title}}</h5>
              <p class="card-text text-center">{{$item->description}}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
</section>

<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form  method="post" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">                
            <label for="recipient-name" class="col-form-label"></label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"></label>
            <input type="file" class="form-control" name="imagePlat">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label"></label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">share</button>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@endsection
