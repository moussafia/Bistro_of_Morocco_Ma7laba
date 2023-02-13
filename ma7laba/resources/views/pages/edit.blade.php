@extends('pages.layout')
@section('title','Edit plat')
@section('formaddplat')
<!-- add les plats -->
<div class="box-shadow-md bg-white ontainer-fluid d-flex flex-column justify-content-center mt-5 align-items-center">
    <div class="py-3">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit plat</h1>
    </div>
    <div>
        <form action="{{route('posts.update',$post->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Title</label>
                <input type="text" class="form-control" id="Title" name="Title" value="{{$post->title}}">

            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">image</label>
                <div style="heigth: 40px;" class="d-flex justify-content-center py-3">
                    <img src="{{asset($post->path)}}" height="100">
                </div>
                <input type="file" class="form-control" id="imagePlat" name="imagePlat">

            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label" >Description</label>
                <textarea class="form-control" id="description" name="description" >{{$post->description}}</textarea>

            </div>
            <div class="modal-footer gap-2">
                <a type="button" class="btn btn-secondary" data-bs-dismiss="modal" href="{{route('page.home')}}">Close</a>
                <button class="btn btn-primary" type="submit">Edit</button>
            </div>
        </form>
    </div>

@endsection