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
      <button type="button" class="btn btn-primary">Primary</button><a href="{{route ('movies.show', $movie) }}">Dettagli</a>
      <a href="{{route ('movies.edit', $movie) }}">Modifica</a>
     </li>
  @endforeach

</ul>

<div class="">
  <a href="{{route ('movies.create')}}">Aggiungi nuovo film</a>

</div>

@endsection
