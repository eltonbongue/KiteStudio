@extends('layout.main_admin')

    @section('title', 'Novidades')

    @section('content')



    <div id="ttt">

    </div>
      <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1 class="test">Crie uma Novidade</h1>
        <form action="{{route('lista_novidade.store')}}" method="post" enctype="multipart/form-data">

            @csrf
            @method('post')
  
      <div class="form-group">
        <label for="image">Imagem da Novidade:</label>
        <input type="file" id="image" name="image" class="from-control-file">
      </div>
  
  
          <div class="form-group">
            <label for="descricao">Descricão</label>
           <textarea name="descricao" id="descricao" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
          </div>
  
        <input type="submit" class="btn btn-primary" value="Criar evento" id="botao">
        </form>
      </div>

    @endsection