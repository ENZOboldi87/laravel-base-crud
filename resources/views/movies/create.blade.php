<h3>questa e la pagina dove si crea il film </h3>

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
  <form action="{{ route ('movies.store')}}" method="post">
    @csrf
    @method('POST')

    <div class="">
      <label>Titolo</label>
      <input type="text" name="title" value="{{old('title')}}">
    </div>

    <div class="">
      <label>Descrizione</label>
      <textarea name="description" rows="8" cols="80">{{ old('description')}}</textarea>
    </div>

    <div class="">
      <label>Anno</label>
      <input type="number" name="year" value="{{old ('year')}}">
    </div>

    <div class="">
      <label>Rating</label>
      <input type="text" name="rating" value="{{old('rating')}}">
    </div>

    <div class="">
      <input type="submit" value="Salva">
    </div>
  </form>
</div>

<a href="{{route ('movies.index')}}">torna indietro</a>
