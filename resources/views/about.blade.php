@extends('welcome')
@section('content')
    <p>This is About page.</p>
    <form action="{{ route('about.info') }}" method="post">
        @csrf
        <input type="text" name="name" id="" placeholder="Enter your name"> <br>
        <input type="email" name="email" id="" placeholder="Enter your Email"> <br>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
@endsection
