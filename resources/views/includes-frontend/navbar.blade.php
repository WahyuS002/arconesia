<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light pb-3">
    <div class="container-fluid">
        <div class="container">
            <div class="row ">
                <div class="col-xl-1  col-lg-12 text-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand font1" href="#"> <img src="{{ asset('frontend/images/logo.png') }}" alt=""></a>
                    <hr>
                </div>
                <div class="col-xl-11 col-lg-12">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto">
                            <a class="nav-item mr-4 ml-4 font1 nav-link{{ request()->is('/') ? ' active' : '' }}"
                                style="font-weight: 900; letter-spacing: 1px;" href="{{ route('home') }}"> <span
                                    class="sr-only">(current)</span>Home</a>
                            <a class="nav-item mr-4 ml-4 font1 nav-link"
                                style="font-weight: 900; letter-spacing: 1px;" href="#">About</a>
                            <a class="nav-item mr-4 ml-4 font1 nav-link"
                                style="font-weight: 900; letter-spacing: 1px;" href="#">Mart</a>
                            <a class="nav-item mr-4 ml-4 font1 nav-link"
                                style="font-weight: 900; letter-spacing: 1px;" href="invest.html">Invest</a>
                            <a class="nav-item mr-4 ml-4 font1 nav-link{{ request()->is('room') ? ' active' : '' }}"
                                style="font-weight: 900; letter-spacing: 1px;" href="{{ route('room') }}"> Room</a>
                            <a class="nav-item mr-4 ml-4 font1 nav-link"
                                style="font-weight: 900; letter-spacing: 1px;" href="#">Contact</a>

                            <li class="nav-item dropdown">
                            @auth
                                <a class="nav-link dropdown-toggle mr-4 ml-4 font1"
                                    style="font-weight: 900; letter-spacing: 1px;" href="#" id="navbarDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="profile-comment"
                                        style="background-image: url({{ url('frontend/images/mart7.jpeg') }});">
                                    </div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="Profile">
                                    <a class="dropdown-item nav-item font1"
                                        style="font-weight: 900; letter-spacing: 1px;"
                                        href="{{ route('dashboard') }}">DASHBOARD</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item nav-item font1"
                                        style="font-weight: 900; letter-spacing: 1px;" href="{{ route('logout') }}">LOGOUT</a>
                                </div>
                                @endauth
                                @guest
                                <a type="button" href="{{ route('login') }}"
                                class="nav-item mr-4 ml-4 hbtn hb-fill-on pl-5 pr-5 bg-color1">
                                {{-- <a href="{{ route('login') }}">Login</a>          --}}
                                    Login
                                </a>                                    
                                @endguest
                        </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</nav>