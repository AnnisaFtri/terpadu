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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet"

    <!-- Custom CSS -->
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet" type="text/css">
    <link rel="icon" href="{{asset('logo.png')}}">

    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link href="https://unpkg.com/boxicon02.0.9/css/boxicons.min.css" rel="stylesheet"> -->

    <style>
/*dashboard*/     
*{
    margin: 0;
    padding: 0;
    border: none;
    outline: none;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    
}
body{
    display: flex;
    background: #A7EEF6;
}
.sidebar{
    position: sticky;
    top: 0;
    left: 0;
    bottom: 0;
    width: 95px;
    height: 100vh;
    padding:0 0rem;
    color: white;
    overflow: hidden;
    transition: all 0.5s linear;
    background: #1ADAF1;

}
.sidebar:hover{
    width: 240px;
    transition: 0.5s;
}
.logo{
    height: 80px;
    padding: 20px; /*buat jauhin sidebar atas */
}
.menu{
    height: 88%;
    position: relative;
    list-style: none;
    padding: 0;
}
.menu li{
    padding: 1rem;
    margin: 8px 0;
    border-radius: 8px;
    transition: all 0.5s ease-in-out;
}
.menu li:hover,
.active{
    background: #bce2e7;
}
.menu a{
    color: white;
    font-size: 14px;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 1.5rem;
}
.menu a span{
    overflow: hidden;
}
.menu a i{
    font-size: 1.2rem;
}

/*main body section */



   

/* landingpage */




    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="background: linear-gradient(45deg,#FFFFFF,#1ADAF1);">

   
    {{-- </section>
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
                           
                        </li>
                       
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav> --}}

    <div class="sidebar" style="position: fixed">
        <div class="logo">
            <ul class="menu">
                
                <li class="active">
                    <a href="#">
                        <i class="fa-solid fa-house"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-child-reaching"></i>
                        <span>Data Anak</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-hand-holding-droplet"></i>
                        <span>Pelayanan</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-stethoscope"></i>
                        <span>Pemeriksaan</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-user-nurse"></i>
                        <span>User</span>
                    </a>
                </li>
                <li class="logout" >
                    <a href="{{url('/logout')}}">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <main >
        <div class="container" style="padding: 200px">
        @include('layouts.flash-message')
        @yield('content')
    </div>
    </main>


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
