@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<!-- <head> -->
    <!--boxicons-->
    
    <body>
    
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