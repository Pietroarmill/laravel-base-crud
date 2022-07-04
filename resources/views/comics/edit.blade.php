@extends('layouts.app')

@section('main_content')
<div class="container">
  <h1>Modifica</h1>

  <form action="{{ route('comics.update', ['comic' => $comic_update->id ]) }}" method="post">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $comic_update->title }}">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea type="text" class="form-control" id="description" name="description">{{ $comic_update->description }}</textarea>
    </div>
    <div class="mb-3">
      <label for="thumb" class="form-label">Image</label>
      <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic_update->thumb }}">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="text" class="form-control" id="price" name="price" value="{{ $comic_update->price }}">
    </div> 
    <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" class="form-control" id="series" name="series" value="{{ $comic_update->series }}">
    </div>
    <div class="mb-3">
      <label for="sale_date" class="form-label">Sale date</label>
      <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic_update->sale_date }}">
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">Type</label>
      <input type="text" class="form-control" id="type" name="type" value="{{ $comic_update->type }}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection