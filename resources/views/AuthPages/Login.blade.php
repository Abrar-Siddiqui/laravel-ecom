
@extends('Layout.Layout')
@section("title")
Login
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-8 col-10 mx-auto shadow-lg my-5 rounded-2 py-3 px-4 border border-0 bg-white">
            <h3 class="text-center py-3">User Login</h3>
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" placeholder="Username/E-mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" placeholder="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary form-control">Login</button>
              </form>
        </div>
    </div>
</div>
@stop