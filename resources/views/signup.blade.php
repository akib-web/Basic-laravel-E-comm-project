@extends('master')
@section('content')
<div class="custom_login ">
    <div class="container ">
        <div class="row">
            <div class="col-md-4 offset-4">
                <form class=" text-center" action="/signup" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
                    <label for="inputName" class="visually-hidden">User Name</label>
                    <input type="text" name="name" id="inputName" class="form-control" placeholder="Enter your name" required ><br>
                    <label for="inputEmail" class="visually-hidden">Email address</label>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required ><br>
                    <label for="inputPassword" class="visually-hidden">Password</label>
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required><br>
                    <div class="checkbox mb-3">
                    </div>
                    <button class="w-10 btn btn-primary" type="submit">Sign up</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
                  </form>
                </div>
        </div>
    </div>
</div>


@endsection
