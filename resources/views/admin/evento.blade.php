@extends('layout.main_admin')

    @section('title', 'Eventos')

    @section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
      
      
        <h1>Crie um Evento</h1>
        <form action="/evento" method="post" enctype="multipart/form-data">
      @csrf
  
      <div class="form-group">
        <label for="image">Imagem do Evento:</label>
        <input type="file" id="image" name="image" class="from-control-file">
      </div>
  
          <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome">
          </div>
  
          <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" class="form-control" id="date" name="date">
          </div>
  
          <div class="form-group">
            <label for="title">Descricão</label>
           <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
          </div>
  
        <input type="submit" class="btn btn-primary" value="Criar evento" id="botao">
        </form>
      </div>


    @endsection