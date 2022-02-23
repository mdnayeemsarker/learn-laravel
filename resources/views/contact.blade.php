@extends('welcome')
@section('content')
    <p>This is Contact page.</p>

    {{-- @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif --}}

    <form action="{{ route('student.info') }}" method="post">
        @csrf
        <input type="text" name="name" id="" placeholder="Enter your name"> <br>
        <input type="email" name="email" id="" placeholder="Enter your Email"> <br>
        <input type="phone" name="phone" id="" placeholder="Enter your Phone"> <br>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
@endsection
