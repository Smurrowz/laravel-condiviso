@extends('layouts.app')
@section('content')
    <div class="container ">
        <div>
          <div class="col-12 d-flex justify-content-around align-items-center">
            <h1>Corsi:</h1>
            <a class="btn btn-secondary" href="{{route('admin.courses.create')}}" role="button">Nuovo Corso</a>
          </div>
          <div class="col-12">
            <table class="table table-dark table-striped ">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Periodo</th>
                  <th scope="col">Anno</th>
                  <th scope="col">Crediti</th>
                  <th scope="col">Sito Web</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($courses as $course)
                <tr>
                  <th scope="row">{{$course['id']}}</th>
                  <td>{{$post['name']}}</td>
                  <td>{{$post['period']}}</td>
                  <td>{{$post['year']}}</td>
                  <td>{{$post['cfu']}}</td>
                  <td>{{$post['website']}}</td>
                  <td><th scope="col"><a class="btn btn-primary" href="{{route('admin.courses.show', $post)}}" role="button">Vedi</a></th> 
                  <td><th scope="col"><a class="btn btn-success" href="{{route('admin.courses.edit', $post)}}" role="button">Modifica</a></th>                   
                  <td><th scope="col">
                    <form action="{{route('admin.course.destroy', $post)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <input type="submit" value="! CANCELLA !" class="btn btn-danger">
                    </form>
                  </th></td>
                </tr>
                    
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    @endsection
