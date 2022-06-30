@extends('layouts.app')

@section('main_content')

<h1>Fumetti:</h1>

<ul>
  @foreach ($comics_list as $comic)
  <li>
    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
      <h4>{{ $comic->title }}</h4>
    </a>
    <p>{{ $comic->series }}</p>
  </li>
  @endforeach
</ul>

@endsection