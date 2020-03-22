@extends('layouts.layout')
@section('main')
<div class="wrapper">
  <h1>I nostri ex studenti su LinkedIn</h1>
  <div class="wrapper70">
    <div class="student" style="margin: 0 auto">
      <div class="img">
        <img src="{{$student['img']}}" alt="">
        <div class="img-text">
          <a href="#"><h3>{{$student['name']}} ({{$student['age']}} anni)</h3></a>
          <h4>Assunt{{($student['gender'] == 'M') ? 'o' : 'a'}} da {{$student['company']}} come {{$student['role']}}</h4>
        </div>
      </div>
      <p>{{$student['description']}}</p>
      <i class="fab fa-linkedin"></i>
    </div>
  </div>
  