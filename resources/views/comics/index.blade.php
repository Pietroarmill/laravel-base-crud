@extends('layouts.app')

@section('main_content')

<h1>Fumetti:</h1>

<ul>
  @foreach ($comics_list as $comic)
  <li>
    <h4>{{ $comic->title }}</h4>
    <p>{{ $comic->series }}</p>
  </li>
  @endforeach
</ul>

@endsection