@extends('index')

@section('form')

<div style="width: 900px;" class="container max-w-full mx-auto pt-4">

    <form method="post" action="/items/{{ $item->id }}">
        {{ csrf_field() }}
        @method('put')


        <div class="form-group mb-4">
            <label class="font-bold text-gray-800" for="name">Name: </label>
            <input value="{{ $item->name }}" class="form-control" id="name" name="name">
        </div>

        <div class="form-group mb-4">
            <label class="font-bold text-gray-800" for="desc">Description: </label>
            <input value="{{ $item->desc }}" class="form-control" id="desc" name="desc">
        </div>

        <div class="form-group mb-4">
            <label class="font-bold text-gray-800" for="price">Price: </label>
            <input value="{{ $item->price }}" class="form-control" id="price" name="price">
        </div>

        <div class="form-group mb-4">
            <label class="font-bold text-gray-800" for="quantity">Quantity: </label>
            <input value="{{ $item->quantity }}" class="form-control" id="quantity" name="quantity">
        </div>
        <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Update</button>
        <a href="/items" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
    </form>
</div>

@endsection
