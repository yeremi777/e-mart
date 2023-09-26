@extends('layout.main')

@section('container')
    <div class="container">
        <!-- Heading Row -->
        <div class="row align-items-center my-5"
            style="background-image: url('assets/background.png'); background-size: cover; height: 630px;">
            <form action="{{ route('reset-password.post') }}" method="post" style="margin-bottom: 70px;">
                @csrf
                <h2 style="color: white; margin-left: 10px; margin-bottom: 25px;">Reset Password</h2>
                <div class="form-group" style="margin-left: 50px;">
                    <label for="username" style="color: white;">Username</label>
                    <input class="form-control" type="text" placeholder="Username or email" name="username" />
                    @error('username')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group" style="margin-left: 50px;">
                    <label for="new_password" style="color: white;">Current Password</label>
                    <input class="form-control" type="password" placeholder="Current password" name="current_password" />
                    @error('current_password')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group" style="margin-left: 50px;">
                    <label for="confirm_password" style="color: white;">New Password</label>
                    <input class="form-control" type="password" placeholder="New Password" name="new_password" />
                    @error('new_password')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success btn-block" style="margin-left: 50px; margin-top: 25px;">Reset
                    Password</button>
            </form>
        </div>
    </div>
@endsection
