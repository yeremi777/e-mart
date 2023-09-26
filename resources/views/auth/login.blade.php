@extends('layout.main')

@section('container')
    <div class="container">
        <!-- Heading Row -->
        <div class="row align-items-center my-5"
            style="background-image: url('assets/background.png'); background-size: cover; height: 630px;">
            <form action="{{ route('login.post') }}" method="post" style="margin-bottom: 170px;">
                @csrf
                <h2 style="color: white; margin-left: 10px; margin-bottom: 25px;">Sign In</h2>
                <div class="form-group" style="margin-left: 50px;">
                    <label for="username" style="color: white;">Username</label>
                    <input class="form-control" type="text" placeholder="Username or email" name="username" />
                    @error('username')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group" style="margin-left: 50px;">
                    <label for="password" style="color: white;">Password</label>
                    <input class="form-control" type="password" placeholder="Password" name="password" />
                    @error('password')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <input type="submit" class="btn btn-success btn-block" name="login" value="Sign in"
                    style="margin-left: 50px; margin-top: 25px;" />
                <p style="margin-left: 50px; margin-top: 25px; color: white;">
                    Don't have an account? <a href="{{ route('register') }}">Sign Up here</a></p>
                <p style="margin-left: 50px; margin-top: 25px; color: white;">
                    Forgot your password? <a href="{{ route('reset-password') }}">Reset Password</a></p>
            </form>
        </div>
    </div>
@endsection
