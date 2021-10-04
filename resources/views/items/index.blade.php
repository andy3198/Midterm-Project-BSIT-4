@extends('index')

@section('form')

<div style="width: 900px;" class="container max-w-full mx-auto pt-4">
    <h1 class="text-4xl font-bold mb-4">Midterm Project</h1>

    <a href="/items/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add Post</a>


    <form action="{{ url('/logout') }}" method="get">
        <a class="btn btn-primary" href="{{ 'dashboard' }}">Dashboard</a>

        {{ csrf_field() }}

        <button class="btn btn-success" style="margin-left: 90%" type="submit">Logout</button>

        <table class="table table-stripped">
            <thead>
                <th>Name:</th>
                <th>Description</th>
                <th>Pice</th>
                <th>Quantity</th>
                <th>Action</th>
            </thead>
            @foreach($items as $one)
            <tbody">
                <tr>
                    <td>{{ $one->name }}</td>
                    <td>{{ $one->desc }}</td>
                    <td>{{ $one->price }}</td>
                    <td>{{ $one->quantity }}</td>
                    <td>
                        <form method="POST" action="/items/{{ $one->id }}">
                            <a href="/items/{{ $one->id }}/edit" class="btn btn-primary">Edit</a>

                            {{ csrf_field() }}
                            @method('DELETE')

                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>

    </form>

</div>

@endsection
