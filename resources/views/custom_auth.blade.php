@extends('welcome')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card col-lg-6 ml-4">
                <div class="card-body">
                    <form action="" method="post">

                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-lable">Full Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-lable">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-lable">Password</label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="password">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
