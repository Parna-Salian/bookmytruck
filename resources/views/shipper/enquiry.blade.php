@extends('layouts.app')
@section("content")
@section("stylesheet")
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector : '#content'
    });
</script>
@endsection
<div class="bg-gray-50 h-full md:grid md:grid-cols-12">
    <div class="py-16 px-4 md:px-0 md:col-start-4 col-span-6">
        <h2 class="text-4xl leading-10 tracking-tight font-bold text-gray-900 text-center">Let’s get in touch and get to work.</h2>
        <div class="bg-white shadow-sm mt-5 p-6 rounded-md">
            <form action="/posts" method="POST" class="mb-0" enctype="multipart/form-data">
                @csrf
                <label for="title" class="block text-sm font-medium text-gray-700">Company name</label>
                <input type="text" name="title" value="{{old('title')}}" class="mt-1 py-2 px-3 block w-full border border-gray-400 rounded-md shadow-sm" autofocus required>
                
                <label for="title" class="block text-sm font-medium text-gray-700">Phone number</label>
                <input type="text" name="title" value="{{old('title')}}" class="mt-1 py-2 px-3 block w-full border border-gray-400 rounded-md shadow-sm" autofocus required>

                <label for="title" class="block text-sm font-medium text-gray-700">Dimensions</label>
                <input type="text" name="title" value="{{old('title')}}" class="mt-1 py-2 px-3 block w-full border border-gray-400 rounded-md shadow-sm" autofocus required>
                
                <label for="postimage" class="mt-6 block text-sm font-medium text-gray-700">Type of material</label>
                <select class="mt-1 block w-full h-10 border border-gray-400 rounded-md shadow-sm" name="blogcategory" id="blogcategory">
                    <option value="abc"></option>
                </select>

                <label for="blogcategory" class="mt-6 block text-sm font-medium text-gray-700">Material description</label>
                <textarea name="content" id="content" class="mt-1 py-2 px-3 block w-full border border-gray-400 rounded-md shadow-sm">{{old('content')}}</textarea>
                
                <label for="content" class="mt-6 block text-sm font-medium text-gray-700">Total weight (in tonnes)</label>
                <input type="number" name="title" value="{{old('title')}}" class="mt-1 py-2 px-3 block w-full border border-gray-400 rounded-md shadow-sm" autofocus required>
                
                <label for="content" class="mt-6 block text-sm font-medium text-gray-700">Vehicle type</label>
                <select class="mt-1 block w-full h-10 border border-gray-400 rounded-md shadow-sm" name="blogcategory" id="blogcategory">
                    <option value="abc"></option>
                </select>
                
                <label for="content" class="mt-6 block text-sm font-medium text-gray-700">Source</label>
                <input type="text" name="title" value="{{old('title')}}" class="mt-1 py-2 px-3 block w-full border border-gray-400 rounded-md shadow-sm" autofocus required>
                
                <label for="content" class="mt-6 block text-sm font-medium text-gray-700">Destination</label>
                <input type="text" name="title" value="{{old('title')}}" class="mt-1 py-2 px-3 block w-full border border-gray-400 rounded-md shadow-sm" autofocus required>

                <label for="content" class="mt-6 block text-sm font-medium text-gray-700">Payment terms</label>
                <select class="mt-1 block w-full h-10 border border-gray-400 rounded-md shadow-sm" name="blogcategory" id="blogcategory">
                    <option value="abc"></option>
                </select>

                @if($errors->any())
                <div class="mt-6">
                    <ul class="bg-red-100 px-4 py-5 rounded-md">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <button type="submit" class="mt-6 py-2 px-4 w-full border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none">Submit</button>
            </form>
        <div>
    </div>
</div>
@endsection