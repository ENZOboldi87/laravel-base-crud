<h1>in questa pagina mostro i dettagli del film </h1>

<div class="">
  <h2>Titolo: {{$movie->title}}</h2>
  <h3>Descrizione: {{$movie->description}}</h3>
  <h4>Anno: {{$movie->year}}</h4>
  <h5>Rating: {{$movie->rating}}</h5>
</div>


<div class="">
  <a href="{{route ('movies.index')}}">torna indietro</a>
</div>
<div class="">
  <a href="{{route ('movies.edit', $movie->id ) }}">Modifica</a>
</div>
