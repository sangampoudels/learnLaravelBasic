@extends('layout')
@section('content')
<title> Registration </title>
<body>
    <form action="/component" method="post">
        @csrf
        @php
            $demo=1;
        @endphp
        <div class="container">
            <x-input type="text" name="name" label="Your Name":demo="$demo"/>
            <x-input type="email" name="email" label="Enter your email"/><br>
            <x-input type="password" name="password" label="Enter your password"/><br>
            <x-input type="password" name="password_confirmation" label="Confirm Password"/><br>
              <br>
              <br>
            <button class="btn btn-primary">
                Submit
            </button>
        </div>
    </form>
</body>
@endsection 