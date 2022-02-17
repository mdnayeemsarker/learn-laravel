@extends('welcome')
@section('content')
    <p>This is Contact page.</p>
    <form action="{{ route('student.info') }}" method="post">
        @csrf
        <input type="text" name="name" id="" placeholder="Enter your name"> <br>
        <input type="email" name="email" id="" placeholder="Enter your Email"> <br>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
@endsection
