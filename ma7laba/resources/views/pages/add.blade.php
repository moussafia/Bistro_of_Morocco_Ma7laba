@extends('pages.layout')
@section('title','ADDplat')
@section('formaddplat')
<!-- add les plats -->
<div class="drop-shadow-md bg-white mt-5 items-center mx-10 px-10">
    <div class="py-3">
        <h1>ADD plat</h1>
    </div>
    <div>
        <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="recipient-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="Title" value="{{ old('Title') ? old('Title') : ''}}" name="Title">

            </div>
            <div class="mb-3">
                <label for="recipient-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">image</label>
                <input type="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"  id="imagePlat" name="imagePlat">

            </div>
            <div class="mb-3">
                <label for="message-text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <textarea class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="description" name="description">{{ old('description') ? old('description') : ''}}</textarea>

            </div>
            <div class="flex justify-between px-10">
                <a class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"  href="{{route('page.home')}}">Close</a>
                <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="submit">share</button>
            </div>
        </form>
    </div>
    



@endsection