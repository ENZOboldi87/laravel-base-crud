@extends('layouts.layouts')
@section('title')
  BoldiFlix - Qui trovi solo il trash del trash
@endsection
@section('content')
<h1>ciao sono i miei film presenti nel database</h1>

<h2>questi sono i tuoi film</h2>
<ul class="list-unstyled">
  @foreach ($movies as $movie)
    <li>{{$movie->title}}
      <a href="{{route ('movies.show', $movie) }}"><button type="button" class="btn btn-primary">Dettagli</button></a>
      <a href="{{route ('movies.edit', $movie) }}"><button type="button" class="btn btn-warning">Modifica</button></a>
        <form action="{{ route('movies.destroy', $movie) }}" method="post">
  					@csrf
  					@method('DELETE')

  					<button type="submit" class="btn btn-danger">Elimina</button>
  				</form>

      {{-- <button type="submit" class="btn btn-info">
        <span class="glyphicon glyphicon-trash"></span> Delete --}}


     </li>
  @endforeach

</ul>

<div class="">
  <a href="{{route ('movies.create')}}">Aggiungi nuovo film</a>

</div>

@endsection
