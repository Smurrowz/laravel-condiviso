@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12">

        <h3>{{ $degree->name }}</h3>
        <p>{{ $degree->level }}</p>
        <p>{{ $degree->address }}</p>
        <p>{{ $degree->email }}</p>
        <p>{{ $degree->website }}</p>

        <ul>
                @foreach ($degree->courses as $course)
                    <li>
                      Corso: <a href="{{route('admin.courses.show',$course)}}">{{ $course->name }}</a>
                    </li>
                @endforeach
        </ul>

      </div>
    </div>
  </div>

@endsection