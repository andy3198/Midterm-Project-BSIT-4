<form action="/items/{{ $items->id }}">
    {{ csrf_field() }}
    @method('DELETE')

    <button class="ml-4 bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Delete</button>
</form>

@extends('index')

@section('form')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>

            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>

            <div class="modal-body">
            </div>
            <div class="modal-footer">

            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>

            </div>
        </div>
    </div>

 </div>

@endsection

