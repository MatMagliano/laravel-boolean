{{-- @dd(Request::route()->getname()); --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Laravel Boolean</title>
</head>
<body>
  <nav class="navbar">
    <img src="https://www.boolean.careers/images/common/logo.png" alt="">
    <ul>
    <li><a class="{{(Request::route()->getname() == 'static_page.home') ? 'active' : ''}}" href="{{route('static_page.home')}}">home</a></li>
    <li><a href="">corso</a></li>
    <li><a class="{{(Request::route()->getname() == 'students.index') ? 'active' : ''}}" href="{{route('students.index')}}">dopo corso</a></li>
    <li><a href="">lezione gratuita</a></li>
    <li class="btn">candidati ora</li>
    </ul>
  </nav>
  <div class="container">
  
