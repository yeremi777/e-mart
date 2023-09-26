@extends('layout.main')

@section('container')
    <div class="container">
        <!-- Heading Row -->
        <div class="row align-items-center my-5"
            style="background-image: url('assets/background.png'); background-size: cover; height: 630px;">
            <form action="{{ route('register.post') }}" method="post" style="margin-bottom: 70px;">
                @csrf
                <h2 style="color: white; margin-left: 10px; margin-bottom: 25px;">Sign Up</h2>
                <div class="form-group" style="margin-left: 50px;">
                    <label for="name" style="color: white;">Full name</label>
                    <input class="form-control" type="text" placeholder="Your name" name="name"
                        value="{{ old('name') }}" />
                    @error('name')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group" style="margin-left: 50px;">
                    <label for="username" style="color: white;">Username</label>
                    <input class="form-control" type="text" placeholder="Username" name="username"
                        value="{{ old('username') }}" />
                    @error('username')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group" style="margin-left: 50px;">
                    <label for="email" style="color: white;">Email</label>
                    <input class="form-control" type="email" placeholder="Your email" name="email"
                        value="{{ old('email') }}" />
                    @error('email')
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
                <button type="submit" class="btn btn-success btn-block" style="margin-left: 50px; margin-top: 25px;"> Sign
                    up </button>
                <p style="margin-left: 50px; margin-top: 25px; color: white;">
                    Already have an account? <a href="{{ route('login') }}">Sign In here</a></p>
            </form>
        </div>
    </div>
@endsection
