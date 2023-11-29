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
*<style>
    <span style="font-family: verdana, geneva, sans-serif;">
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700");
*<style>
    <span style="font-family: verdana, geneva, sans-serif;">/*  import google fonts */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700");
*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  background: #dfe9f5;
}
.container{
  display: flex;
}
nav{
  position: relative;
  top: 0;
  bottom: 0;
  height: 100vh;
  left: 0;
  background: #fff;
  width: 280px;
  overflow: hidden;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.logo{
  text-align: center;
  display: flex;
  margin: 10px 0 0 10px;
}
.logo img{
  width: 45px;
  height: 45px;
  border-radius: 50%;
}
.logo span{
  font-weight: bold;
  padding-left: 15px;
  font-size: 18px;
  text-transform: uppercase;
}
a{
  position: relative;
  color: rgb(85, 83, 83);
  font-size: 14px;
  display: table;
  width: 280px;
  padding: 10px;
}
nav .fas{
  position: relative;
  width: 70px;
  height: 40px;
  top: 14px;
  font-size: 20px;
  text-align: center;
}
.nav-item{
  position: relative;
  top: 12px;
  margin-left: 10px;
}
a:hover{
  background: #eee;
}
.logout{
  position: absolute;
  bottom: 0;
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
    /* display: flex; */
    /* justify-content: space-between; */
    /* align-items: center; */
    /* flex-wrap: wrap; */
   
    margin-left: 100px;
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
<span style="font-family: verdana, geneva, sans-serif;">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard | By Code Info</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="/logo.jpg" alt="">
          <span class="nav-item">DashBoard</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-user"></i>
          <span class="nav-item">Profile</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-wallet"></i>
          <span class="nav-item">Wallet</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Analytics</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-tasks"></i>
          <span class="nav-item">Tasks</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Settings</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Help</span>
        </a></li>
        <li><a href="" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
