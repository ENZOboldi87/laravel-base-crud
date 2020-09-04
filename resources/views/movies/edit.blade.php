@extends('layouts.layouts')
@section('title')
  BoldiFlix - Qui trovi solo il trash del trash
@endsection
@section('content')
<h1>In questa pagina modifico il film che ho selezionato</h1>

<p>Il film che hai scelto di modificare e: {{$movie->title}}</p>

<div>
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div>
	@endif
</div>

<div class="">
  <form action="{{ route ('movies.update', $movie->id)}}" method="post">
    @csrf
    @method('PUT')

    <div class="">
      <label>Titolo</label>
      <input type="text" name="title" value="{{$movie->title}}">
    </div>

    <div class="">
      <label>Descrizione</label>
      <textarea name="description" rows="8" cols="80">{{ $movie->description}}</textarea>
    </div>

    <div class="">
      <label>Anno</label>
      <input type="number" name="year" value="{{$movie->year}}">
    </div>

    <div class="">
      <label>Rating</label>
      <input type="text" name="rating" value="{{$movie->rating}}">
    </div>

    <div class="">
      <input type="submit" value="Salva">
    </div>
  </form>
</div>




<a href="{{route ('movies.index')}}">torna indietro</a>
@endsection
