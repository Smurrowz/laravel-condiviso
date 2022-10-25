@extends('layouts.app')
@section('content')
<h1 class="text-center">Modifica un corso</h1>
<form action="{{route('admin.courses.update', $course)}}" method="POST">
  @csrf @method('PUT')

  <div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input type="text" name="name" class="form-control" id="name" value="{{old('name', $course->name)}}" placeholder="Inserisci il nome">
  </div>
  <div class="form-group">
    <label for="period">Periodo</label>
    <select name="period" value="{{ old('period', $course->period) }}" class="custom-select @error('period')is-invalid @enderror">
      <option value="I semestre">I semestre</option>
      <option value="II semestre">II semestre</option>
      <option value="Annuale">Annuale</option>
    </select>
    <div class="invalid-feedback">Periodo del corso</div>
    @error('period')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="year">Anno</label>
    <input type="number" class="form-control @error('year')is-invalid @enderror" name="year" id="year" aria-describedby="yearHelp" value="{{ old('year', $course->year) }}" placeholder="Anno">
    <small id="yearHelp" class="form-text text-muted">Anno del corso</small>
    @error('year')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="cfu">Crediti formativi (CFU)</label>
    <select name="cfu" value="{{ old('cfu', $course->cfu) }}" class="custom-select @error('cfu')is-invalid @enderror">
      <option @if($course->cfu === 1) selected @endif value="1">1</option>
        <option @if($course->cfu === 2) selected @endif value="2">2</option>
        <option @if($course->cfu === 3) selected @endif value="3">3</option>
        <option @if($course->cfu === 4) selected @endif value="4">4</option>
        <option @if($course->cfu === 5) selected @endif value="5">5</option>
        <option @if($course->cfu === 6) selected @endif value="6">6</option>
        <option @if($course->cfu === 7) selected @endif value="7">7</option>
        <option @if($course->cfu === 8) selected @endif value="8">8</option>
        <option @if($course->cfu === 9) selected @endif value="9">9</option>
        <option @if($course->cfu === 10) selected @endif value="10">10</option>
        <option @if($course->cfu === 11) selected @endif value="11">11</option>
        <option @if($course->cfu === 12) selected @endif value="12">12</option>
        <option @if($course->cfu === 20) selected @endif value="20">20</option>
        <option @if($course->cfu === 30) selected @endif value="30">30</option>

    </select>
    <div class="invalid-feedback">ESelezione il numero di crediti di questo corso</div>
    @error('cfu')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="website">Sito web</label>
    <input type="text" class="form-control @error('website')is-invalid @enderror" name="website" id="website" aria-describedby="websiteHelp" value="{{ old('website', $course->website) }}" placeholder="https://nome-del-corso.it">
    <small id="websiteHelp" class="form-text text-muted">Sito web del corso</small>
    @error('website')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Decrizione: </label>
    <textarea class="form-control" id="description"  placeholder="Inserisci la descrizione" name="description" rows="20">{{old('description', $course->description)}}</textarea>
  </div>
  <div class="d-flex justify-content-center">
    
    <input type="submit" class="btn btn-success" role="button" value="Salva Modifiche">
  </div>

</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
@endsection