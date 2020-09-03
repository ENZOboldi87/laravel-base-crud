<h1>ciao sono i miei film presenti nel database</h1>

<h2>questi sono i tuoi film</h2>
<ul>
  @foreach ($movies as $movie)
    <li>{{$movie->title}}
      <a href="{{route ('movies.show', $movie->id ) }}">Dettagli</a>
      <a href="{{route ('movies.edit', $movie->id ) }}">Modifica</a>
     </li>
  @endforeach

</ul>

<div class="">
  <a href="{{route ('movies.create')}}">Aggiungi nuovo film</a>

</div>
