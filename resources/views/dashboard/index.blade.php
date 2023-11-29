@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')
<<<<<<< HEAD

<style>
    <span style="font-family: verdana, geneva, sans-serif;">/*  import google fonts */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700");

/* Main Section */
.main{
  position: relative;
  padding: 20px;
  width: 100%;
}
.main-top{
  display: flex;
  width: 100%;
}
.main-top i{
  position: absolute;
  right: 0;
  margin: 10px 30px;
  color: rgb(110, 109, 109);
  cursor: pointer;
}
.main-skills{
  display: flex;
  margin-top: 20px;
}
.main-skills .card{
  width: 25%;
  margin: 10px;
  background: #fff;
  text-align: center;
  border-radius: 20px;
  padding: 10px;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.main-skills .card h3{
  margin: 10px;
  text-transform: capitalize;
}
.main-skills .card p{
  font-size: 12px;
}
.main-skills .card button{
  background: orangered;
  color: #fff;
  padding: 7px 15px;
  border-radius: 10px;
  margin-top: 15px;
  cursor: pointer;
}
.main-skills .card button:hover{
  background: rgba(223, 70, 15, 0.856);
}
.main-skills .card i{
  font-size: 22px;
  padding: 10px;
}
/* Courses */
.main-course{
  margin-top:20px ;
  text-transform: capitalize;
}
.course-box{
  width: 100%;
  height: 300px;
  padding: 10px 10px 30px 10px;
  margin-top: 10px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.course-box ul{
  /*list-style: none;*/
  display: flex;
}
.course-box ul li{
  margin: 10px;
  color: gray;
  cursor: pointer;
}
.course-box ul .active{
  color: #000;
  border-bottom: 1px solid #000;
}
.course-box .course{
  display: flex;
}
.box{
  width: 33%;
  padding: 10px;
  margin: 10px;
  border-radius: 10px;
  background: rgb(235, 233, 233);
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.box p{
  font-size: 12px;
  margin-top: 5px;
}
.box button{
  background: #000;
  color: #fff;
  padding: 7px 10px;
  border-radius: 10px;
  margin-top: 3rem;
  cursor: pointer;
}
.box button:hover{
  background: rgba(0, 0, 0, 0.842);
}
.box i{
  font-size: 7rem;
  float: right;
  margin: -20px 20px 20px 0;
}
.html{
  color: rgb(25, 94, 54);
}
.css{
  color: rgb(104, 179, 35);
}
.js{
  color: rgb(28, 98, 179);
}
  </span
</style>

<span style="font-family: verdana, geneva, sans-serif;">
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome Cdn Link -->
   /*<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>*/
</head>
<body>
    <section class="main">
      <div class="main-top">
        <h1>Skills</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="main-skills">
        <div class="card">
          <i class="fas fa-laptop-code"></i>
          <h3>Web developemt</h3>
          <p>Join Over 1 million Students.</p>
          <button>Get Started</button>
        </div>
        <div class="card">
          <i class="fab fa-wordpress"></i>
          <h3>WordPress</h3>
          <p>Join Over 3 million Students.</p>
          <button>Get Started</button>
        </div>
        <div class="card">
          <i class="fas fa-palette"></i>
          <h3>graphic design</h3>
          <p>Join Over 2 million Students.</p>
          <button>Get Started</button>
        </div>
        <div class="card">
          <i class="fab fa-app-store-ios"></i>
          <h3>IOS dev</h3>
          <p>Join Over 1 million Students.</p>
          <button>Get Started</button>
        </div>
      </div>
      <section class="main-course">
        <h1>My courses</h1>
        <div class="course-box">
          <ul>
            <li class="active">In progress</li>
            <li>explore</li>
            <li>incoming</li>
            <li>finished</li>
          </ul>
          <div class="course">
            <div class="box">
              <h3>HTML</h3>
              <p>80% - progress</p>
              <button>continue</button>
              <i class="fab fa-html5 html"></i>
            </div>
            <div class="box">
              <h3>CSS</h3>
              <p>50% - progress</p>
              <button>continue</button>
              <i class="fab fa-css3-alt css"></i>
            </div>
            <div class="box">
              <h3>JavaScript</h3>
              <p>30% - progress</p>
              <button>continue</button>
              <i class="fab fa-js-square js"></i>
            </div>
          </div>
        </div>
      </section>
    </section>
  </div>
</body>
</html></span>
=======
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
>>>>>>> 7bc474f02706a6d612bee2143ba9d38296801764
