@php use Illuminate\Support\Facades\Auth; @endphp
    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet" type="text/css">
    <link rel="icon" href="{{asset('logo.png')}}">

    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link href="https://unpkg.com/boxicon02.0.9/css/boxicons.min.css" rel="stylesheet"> -->

    <style>
        .navbar .nav-item .nav-link:hover {
            color: #227dff;
        }

        .bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}

.border {
    border: solid;
    border-radius: 50px
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 26px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}
#sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 250px;
    height: 100%;
    background: var(--light);
    background-color: #CAF2F0;
    z-index: 1000;
    font-family: Tuffy;
}
#sidebar .brand {
    font-size: 24px;
    font-weight: 700;
    height: 56px;
    display: flex;
    align-items: center;
    color: black;
}
#sidebar .brand .bx{
    min-width: 60px;
    display: flex;
    justify-content: center;

}
#sidebar .side-menu {
    width: 100%;
    margin-top: 48px;
}
#sidebar .side-menu li {
    height: 48px;
    margin-left: 6px;
    border-radius: 48px 0 0 48px;
    padding: 4px;
}
#sidebar .side-menu li a {
    width: 100%;
    height: 100%;
    background: var(--dark);
    display: flex;
    align-items: center;
    border-radius: 48px;
}
#sidebar .a .img {
    width: 5px;
    height: 5px;
}
#sidebar .row {
    --bs-gutter-y: 58;
    display: flex;

}
/* landingpage */
#landingpage{
   margin: 0;
   padding: 0;
   width: 100%;
   background-color: aquamarine;
    
}
#landingpage .wrapper{
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(#1ADAF1, #A7EEF6);
}
#landingpage .logo{
    float: left;
    margin-left: 46px;
    padding: 0px 38px;
    font-family: 'Raleway', sans-serif;
    font-weight: bold;
    font-size: 25px;
}
#landingpage .logo a{
    text-decoration: none;
    color: whitesmoke;
    margin-bottom: 5%;
}
#landingpage .header{
    text-align: center;
    position: absolute;
    top: 40%;
    left: 72%;
    transform: translate(-50%, -50%);
}
#landingpage .header h1{
    color: white;
    text-align: left;
    font-family: 'Noto Serif JP', sans-serif;
    font-size: 35px;
}
#landingpage .header span{
    color: #35230e;
}
#landingpage .content-header{
    position: absolute;
    transform: translate(-50%, -50%);
    text-align: center;
    top: 65%;
    left: 73%;
}
#landingpage .content-header p{
    color: black;
    font-family: 'Raleway', sans-serif;
    font-size: 16px;
    text-align: left;
}
#landingpage .content-header .btn btn-danger{
    width: 100%;
    height: 42px;
    border-radius: 0px 10px 10px 0px;
    border: none;
    color: aquamarine;
}
#landingpage .col-img{
    
    position: absolute;
    top: 50%;
    left: 22%;
    transform: translate(-50%, -50%);
    width: 57%;
    text-align: right;
}

    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="background: linear-gradient(45deg,#FFFFFF,#1ADAF1);">

   
    </section>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto align-items-center">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('') }}</a>
                            </li>
                        @endif

                    @else
                        <li class="nav-item mx-4 d-flex align-items-center">
                            <h1 class="m-auto mx-2"><i class="bi bi-person-circle"></i></h1>
                            <div>
                                <p class="mb-0 fs-5">{{Auth::user()->username}}</p>
                                <p class="text-capitalize m-0 text-secondary">{{Auth::user()->role}}</p>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="btn logout btn-danger" href="{{ route('logout') }}">{{ __('Logout') }}</a>
                        </li>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4 container">
        @include('layouts.flash-message')
        @yield('content')
    </main>
</div>

@yield('footer')
<script>
    window.setTimeout(function () {
        $(".alert").fadeTo(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 3000);
</script>
</body>
</html>
