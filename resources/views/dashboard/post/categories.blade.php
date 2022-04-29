@extends('layouts.master')

@section('content')

  <h1>Categorie</h1>

  <a href="{{ route('categorie.create') }}" class="btn btn-success">Create</a>

  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col">url_clean</th>
        <th scope="col" colspan ="2">Options</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $categorie)



      @endforeach
    </tbody>
  

</table>

  <div class="mt-3">{{ $categories -> links()}} </div> 


@endsection