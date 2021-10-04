@extends('index')

@section('form')

<div style="width: 900px;" class="container max-w-full mx-auto pt-4">

    <form method="POST" action="/items">
        {{ csrf_field() }}

        <div class="form-group mb-4">
            <label class="font-bold text-gray-800" for="name">Name: </label>
            <input class="form-control" placeholder="Enter Name" id="name" name="name">
        </div>

        <div class="form-group mb-4">
            <label class="font-bold text-gray-800" for="desc">Description: </label>
            <input class="form-control" placeholder="Enter Description" id="desc" name="desc">
        </div>

        <div class="form-group mb-4">
            <label class="font-bold text-gray-800" for="price">Price: </label>
            <input class="form-control" placeholder="Enter Price" id="price" name="price">
        </div>

        <div class="form-group mb-4">
            <label class="font-bold text-gray-800" for="quantity">Quantity: </label>
            <input class="form-control" placeholder="Enter Quantity" id="quantity" name="quantity">
        </div>

        <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Create</button>
        <a href="/items" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
    </form>
</div>
@endsection
