@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="wrap">
                <p class="form-title">
                    Sign Up</p>
                <form class="login">
                <input type="text" placeholder="Enter Email" />
                <input type="text" placeholder="Phone number" />
                <input type="text" placeholder="Enter Username" />
                <input type="password" placeholder="Enter Password" />
                <input type="password" placeholder="Re-enter Password" />
                <input type="button" value="Sign Up" class="btn btn-success btn-sm" />
                <input type="button" value="Login to existing account" class="btn btn-info btn-sm" role="button" onclick="window.close(); window.open('Signin.html');" />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection