@extends('layout.main_admin')

    @section('title', 'Eventos')

    @section('content')



    <div id="ttt">

    </div>
      <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1 class="test">Crie um Evento</h1>
        <form action="/evento" method="post" enctype="multipart/form-data">
      @csrf
  
      <div class="form-group">
        <label for="image">Imagem do Evento:</label>
        <input type="file" id="image" name="image" class="from-control-file">
      </div>
  
          <div class="form-group">
            <label for="titulo">Evento:</label>
            <input type="text" class="form-control" id="title" name="titulo" placeholder="Nome">
          </div>
  
          <div class="form-group">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade">
          </div>
  
          <div class="form-group">
            <label for="descricao">Descricão</label>
           <textarea name="descricao" id="descricao" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
          </div>
  
        <input type="submit" class="btn btn-primary" value="Criar evento" id="botao">
        </form>
      </div>

    @endsection