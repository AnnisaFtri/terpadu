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
<<<<<<< HEAD
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
    padding: 16px; /*buat jauhin sidebar atas */
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
.main--content{
    position: relative;
    background: rgb(233, 89, 89);
    width: 100%;
    padding: 0;
    margin: 0;
}
.header--wrapper img{
    width: 50px;
    height: 50px;
    cursor: pointer;
    border-radius: 50%;
}
.header--wrapper{
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    background: #A7EEF6;
}


   

=======
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
>>>>>>> 9ec9f635b51eb64464e2d4e3ca8864a7e8ea6da2
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
<<<<<<< HEAD
=======
    
>>>>>>> 9ec9f635b51eb64464e2d4e3ca8864a7e8ea6da2
    position: absolute;
    top: 50%;
    left: 22%;
    transform: translate(-50%, -50%);
    width: 57%;
    text-align: right;
}

<<<<<<< HEAD



=======
>>>>>>> 9ec9f635b51eb64464e2d4e3ca8864a7e8ea6da2
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<<<<<<< HEAD
<body>
=======
<body style="background: linear-gradient(45deg,#FFFFFF,#1ADAF1);">
>>>>>>> 9ec9f635b51eb64464e2d4e3ca8864a7e8ea6da2

   
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
                           
                        </li>
                       
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
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
