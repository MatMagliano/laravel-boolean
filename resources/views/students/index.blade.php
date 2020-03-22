
@extends('layouts.layout')
@section('main')
  <div class="wrapper">

    <div>
      <input type="text" name="age" id="age">
      <input type="text" name="role" id="role">
      <input type="submit" value="cerca" id="filter-button">
    </div>

    <h1>I nostri ex studenti su LinkedIn</h1>
    <div class="wrapper70">
    <div class="students">
      @foreach (config('students.students') as $key => $student)
        <div class="student">
          <div class="img">
            <img src="{{$student['img']}}" alt="">
            <div class="img-text">
              <a href="{{route('students.show', ['id' => $key])}}"><h3>{{$student['name']}} ({{$student['age']}} anni)</h3></a>
              <h4>Assunt{{($student['gender'] == 'M') ? 'o' : 'a'}} da {{$student['company']}} come {{$student['role']}}</h4>
            </div>
          </div>
          <p>{{$student['description']}}</p>
          <i class="fab fa-linkedin"></i>
        </div>   
      @endforeach
    </div>

    </div>
  </div>
    
@endsection
