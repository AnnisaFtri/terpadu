@extends('layouts.app')
@section('title', 'Landingpage')
@section('content')

    <body>
        <section id="landingpage">
    <div class="wrapper">
        <div class="nav">
            <div class="logo">
                <a href="#">
                    <p>Posterpadu</p>
                </a>
            </div>
            
        </div>
        <div class="header">
            <h1>AYO DATANG KE <span>POSYANDU</span> SETIAP MINGGU</h1>
        </div>
        <div class="content-header">
            <p>Punya balita? ditimbang di Posyandu ya.. <br>
            Anak sehat, tambah umur, tambah berat dan tambah pandai.
            Mari bersama-sama mencegah stunting pada anak.</p>
            <br>
                <a style="margin-left:-100px" class="btn btn-primary" type="submit" href="{{route('login')}}">Login</a>
            
                <a class="btn btn-danger" type="submit" href="{{route('register')}}">Register</a>
            

        </div>
        <div class="col-img">
            <img src="{{asset('landingpage.png')}}">
        </div>
    </div>
    </section>


    </body>
