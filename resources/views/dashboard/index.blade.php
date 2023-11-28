@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')
<!-- <head> -->
    <!--boxicons-->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
    </head>
<style>
body{
    min-height: 100vh;
    background-color: aqua
}
nav{
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 150%;
    background-color: aliceblue;
}
nav .logo-image{
    min-width: 45px;
    background-color: red;
}
nav .logo-image img{
    width: 45px;
    object-fit: cover;
    border-radius: 50%;
}

</style>    
    
 <body>       
     <nav>
        <div class="logo-name">
            <div class="logo-image">
            <img src="{{asset('logo.png')}}">
            </div>
        </div>
     </nav>
 </body>    
