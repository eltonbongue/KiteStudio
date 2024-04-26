@extends('layout.main_admin')

    @section('title', 'Galeria')

    @section('content')


    <div id="ttt">

    </div>
      <div id="event-create-container" class="col-md-6 offset-md-3">
        <h3 class="test">Adicione uma Foto na galeria</h3>
        <form action="/dashboard" method="post" enctype="multipart/form-data">
            @csrf
  
      <div class="form-group">
        <label for="image">Imagem:</label>
        <input type="file" id="image" name="image" class="from-control-file">
      </div>
      <input type="submit" class="btn btn-primary" value="Adicionar foto" id="botao">
        </form>
      </div>



    @endsection