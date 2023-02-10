<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body class="overflow-x-hidden">
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
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto erg regrf ergrfg sfgqsfg fgfd</td>
                <td style="heigth: 40px;"><img height="100" src="{{URL::asset('image/fancy-cakes-on-banquet-table.jpg')}}"></td>
                <td>
                    <div>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit" data-bs-whatever="">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </div>
                </td>
              </tr>
            </tbody>
          </table>
    </div>
      <div class="row gap-4 mx-4 my-5">
        <div class="col-3">
          <div class="card" >
            <div style="heigth: 40px;">
              <img height="100" src="{{URL::asset('image/fancy-cakes-on-banquet-table.jpg')}}" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Card title</h5>
              <p class="card-text text-center">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>
</section>
<!-- add les plats -->
<div class="modal fade" id="ADD" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Title</label>
            <input type="text" class="form-control"  name="Title">
            @error('Title')
            {{ $message }}
            @enderror
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">image</label>
            <input type="file" class="form-control" name="imagePlat">
            @error('imagePlat')
            {{ $message }}
            @enderror
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Description</label>
            <textarea class="form-control" name="description"></textarea>
          @error('description')
          {{ $message }}
          @enderror
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button  class="btn btn-primary" type="submit">share</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
<!-- edit les plats -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Title</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">image</label>
            <input type="file" class="form-control" name="imagePlat">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Description</label>
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
</body>
</html>