@extends('layouts.app')

@section('main_content')
  <div class="container">
    <section class="comic-section">
      <h1>{{ $comic->title }}</h1>
      <h4>{{ $comic->series }}</h4>
      <p>{{ $comic->type }}</p>
      <p>{{ $comic->sale_date }}</p>

      <img src="{{ $comic->thumb }}" alt="">
      <p>{{ $comic->description }}</p>
      <h5>${{ $comic->price }}.00</h5>
    </section>

    <div>
      <a class="btn btn-primary" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica</a>
    </div>
  </div>
@endsection