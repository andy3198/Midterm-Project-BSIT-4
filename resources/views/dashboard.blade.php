@extends('index')

@section('form')
<div class="container" style="margin-top: 5%">
    <a class="btn btn-primary" href="{{ 'items' }}">Items</a>

    <form action="{{ url('/logout') }}" method="get">

        {{ csrf_field() }}

        <button class="btn btn-success" style="margin-left: 90%" type="submit">Logout</button>

        <div class="row">

            <div class="col-md-4 col-offset-4" style="align-content: center">

                <h4 style="text-align: center">Welcome to my Dashboard</h4>
                <hr>
                <h3 style="text-align: center">What is Lorem Ipsum?</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

            </div>

            <div class="col-md-5 col-offset-5">
                <h4 style="text-align: center">Danne Andy Jee G. Polinar BSIT-4</h4>
                <hr>
                <h3 style="text-align: center">About</h3>
                <p style="margin-left: 10%">Address: <a href="{{ url('https://www.google.com/maps/place/Banlasan,+Bohol/@9.894071,123.9321287,15z/data=!3m1!4b1!4m5!3m4!1s0x33aa3030a3563929:0x57d379e59513c50a!8m2!3d9.8957856!4d123.9387637') }}" target="new blank"><strong>Banlasan, Tubigon, Bohol</strong></a></p>
                <p style="margin-left: 10%">Email: <a href="{{ url('andygolez143@gmail.com') }}" target="ne blank"><strong>andygolez143@gmail.com</strong></a></p>
                <p style="margin-left: 10%">School: <a href="{{ url('https://www.facebook.com/mdctubigon/') }}" target="new blank"><strong>Mater Dei College</strong></a></p>
                <p style="margin-left: 10%">School ID: <strong>10257-1T18</strong></p>
                <p style="margin-left: 10%"><a href="{{ url('https://www.facebook.com/profile.php?id=100009303482365') }}" target="new blank"><strong>FaceBook Accout Click To Visit me</strong></a></p>

            </div>

        </div>

    </form>

</div>
@endsection
