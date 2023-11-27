@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<!-- <head> -->
    <!--boxicons-->
    
    <body>
<<<<<<< HEAD
    
        <div class="sidebar">
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
        
        <div class="main--content">
            <div class="header--wrapper">
                <div class="header--title">
                    <span>Primary</span>
                    <h2>Dashboard</h2>
                </div>
                <div class="user--info">
                    <div class="search--box">
                        <i class="fa-solid fa-search"></i>
                        <input type="text" placeholder="search"/>
                    </div>
                    <img src="{{asset('logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </body>
<!-- </head> -->
=======
        <section id="sidebar">
            <a href="#" class="brand">
            <img height="110" src="{{asset('logo.png')}}">
                <span class="text">TERPADU</span>
            </a>
            <ul class="side-menu top">
                
                <li>
                    <a href="#">
                       <i class='bx bxs-home'></i>
                       <span class="text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-child' ></i>
                        <span class="text">Data Balita</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-donate-heart'></i>
                        <span class="text">Pelayanan</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bxs-droplet-half'></i>
                        <span class="text">Pemeriksaan</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-user' ></i>
                        <span class="text">User</span>
                    </a>
                </li>
        </section>
        <div style="margin-left: 20%; margin-top:30px;" class="container">
        <div class="row">
                <div class="col-3">
                    <a href="" class="text-decoration-none">
                        <div class="card bg-c-blue ">
                            <div class="card-body text-white">
                                <h1 class="text-right"><i class="bi bi-person-fill"></i><span
                                        class="f-right">{}</span></h1>
                                <h2>Pelayanan</h2>
                            </div>
                        </div>
        <div style="margin-left: 120%; margin-top:30px;" class="container">
        <div class="row">
                    <div class="card bg-c-blue ">
                            <div class="card-body text-white">
                                <h1 class="text-right"><i class="bi bi-person-fill"></i><span
                                        class="f-right">{}</span></h1>
                                <h2>Pemeriksaan</h2>
                            </div>
                        </div>
        
        <div style="margin-left: 20%; margin-top:50px;" class="container">
                    <div class="card bg-c-blue ">
                            <div class="card-body text-white">
                                <h1 class="text-right"><i class="bi bi-person-fill"></i><span
                                        class="f-right">{}</span></h1>
                                <h2>Log</h2>
                            </div>
                        </div>
            
    </body>
<!-- </head> -->
>>>>>>> 9ec9f635b51eb64464e2d4e3ca8864a7e8ea6da2
