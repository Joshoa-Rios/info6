@extends('layouts.master')

@section('content')
<form action="{{route("post.store")}}" method="post">
    <div class="form-group">
      <label for="title" class="form-label">Título</label>
      <input type="text" class="form-control" name="title" id="title">
    </div>
      
    <div class="form-group">
      <label for="url_clean">Url Limpia</label>
      <input type="text" class="form-control" name="url_clean" id="url_clean">
    </div>

    <div class="form-group">
        <label for="content">Contenido</label>
        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
    </div>
    
    <button type="submit" value="Enviar" class="btn btn-primary">Enviar</button>
  </form>
@endsection