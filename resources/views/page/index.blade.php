@extends('layout.main')

@section('container')
    @guest
        <div class="container">
            <div class="row align-items-center my-5">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('/assets/home_background.png') }}" alt="">
            </div>
        </div>
    @endguest

    @auth
        <div class="container">
            <!-- Heading Row -->
            <div class="row align-items-center my-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
                    style="width: 1137px; max-width: 100%; display: block;margin-left: auto; margin-right: auto; ">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox" align="center">
                        <!-- Slide One - Set the background image for this slide in the line below -->
                        <div class="carousel-item active"
                            style="background-image: url('assets/banner1.jpg'); background-size: cover;">
                        </div>
                        <!-- Slide Two - Set the background image for this slide in the line below -->
                        <div class="carousel-item" style="background-image: url('assets/banner2.jpg'); background-size: cover;">
                        </div>
                        <!-- Slide Three - Set the background image for this slide in the line below -->
                        <div class="carousel-item" style="background-image: url('assets/banner2.jpg'); background-size: cover;">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
            <h2>Categories</h2>
            <p></p>
            <!-- Content Row -->
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-md-4 mb-5">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title" style="text-align: center;">{{ $category->name }}</h2>
                                <p class="card-text"><img src="{{ asset("assets/categories/{$category->logo}") }}"
                                        style="margin-left: 50px;margin-right: auto;">
                                </p>
                            </div>
                            <div class="card-footer" style="text-align: center;">
                                <a href={{ "/{$category->slug}" }} class="btn btn-primary btn-sm">More Info</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- /.col-md-4 -->
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->
        </div>
    @endauth
@endsection
