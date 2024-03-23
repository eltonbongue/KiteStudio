@extends('layout.main_admin')

    @section('title', 'Galeria')

    @section('content')


    <div id="ttt">

    </div>
      <div id="event-create-container" class="col-md-6 offset-md-3">
        <h3 class="test">Adicione uma Foto na galeria</h3>
        <form action="/evento" method="post" enctype="multipart/form-data">
            @csrf
  
      <div class="form-group">
        <label for="image">Imagem do Evento:</label>
        <input type="file" id="image" name="image" class="from-control-file">
      </div>

        </form>
      </div>



    @endsection