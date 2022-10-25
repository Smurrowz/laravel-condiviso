@extends('layouts.app')
@section('content')
<div class="container ">
  <h1 class="text-primary text-center">{{$course['name']}}</h1>
  <span class="text-secondary text-center"> <strong>Periodo :</strong>  {{$course['period']}} -</span>
  <span class="text-secondary text-center"> <strong>Anno :</strong>  {{$course['year']}} -</span>
  <span class="text-secondary text-center"> <strong>Crediti :</strong>{{$course['cfu']}} -</span>
  <span class="text-secondary text-center"> <strong> Sito Web :</strong>{{$course['website']}} </span>

  <div class="d-flex justify-content-around m-4" >
    <p>Creato il: {{$course['created_at']}} </p>
    <p>Modificato il: {{$course['updated_at']}}</p>
  </div>
  <p>
    {{$course['description']}}
  </p>

  <span>Corso di Laurea: <a href="{{route('admin.degrees.show', $course->degree)}}">{{ $course->degree->name }}</a></span>
  <div class="text-center d-flex justify-content-around">
    <a class="btn btn-success" href="{{route('admin.courses.edit', $course)}}" role="button">Modifica</a>
    <form action="{{route('admin.courses.destroy', $course)}}" method="POST">
      @csrf
      @method('DELETE')
      <input type="submit" value="! CANCELLA !" class="btn btn-danger">
    </form>
  </div>
</div>
@endsection