@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="wrap">
                <p class="form-title">
                    Sign In</p>
                <form class="login">
                <input type="text" placeholder="Username" />
                <input type="password" placeholder="Password" />
                <input type="button" value="Sign In" class="btn btn-success btn-sm" />
                <input type="button" value="Create a new account" class="btn btn-info btn-sm" role="button" onclick="window.close(); window.open('Signup.html');" />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection