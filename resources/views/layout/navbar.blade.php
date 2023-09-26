<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}"><img src="assets/brand.png" alt="" width="110px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item {{ Route::is('register') ? 'active' : '' }}"
                        style="margin-left: 10px;margin-right: 10px;">
                        <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                    </li>
                    <li class="nav-item {{ Route::is('login') ? 'active' : '' }}"
                        style="margin-left: 10px;margin-right: 10px;">
                        <a class="nav-link" href="{{ route('login') }}">Sign In</a>
                    </li>
                @endguest

                @auth
                    <li style="margin-left: 10px;margin-right: 10px;">
                        <!-- Example split danger button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger">Hi, {{ explode(' ', $user->name)[0] }}</button>
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#"><img src="{{ asset('/assets/cart.png') }}" width=45 height=40></a>
                    </li>
                @endauth

                <li class="nav-item {{ Route::is('help') ? 'active' : '' }}"
                    style="margin-left: 10px;margin-right: 10px;">
                    <a class="nav-link" href="{{ route('help') }}">Help</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
