@extends('master')
@section('content')
<div class="custom_login ">
    <div class="container ">
        <div class="row">
            <div class="col-md-4 offset-4">
                <form class=" text-center" action="login" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                    <label for="inputEmail" class="visually-hidden">Email address</label>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required >
                    <label for="inputPassword" class="visually-hidden">Password</label>
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <div class="checkbox mb-3">
                      <label>
                        <input type="checkbox" value="remember-me"> Remember me
                      </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
                  </form>
                  <p class="small text-center text-gray-soft">Don't have an account yet? <a href="/signup">Sign up</a></p>
            </div>
        </div>
    </div>
</div>


@endsection
