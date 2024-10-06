@extends('layout.main')

    @section('title', 'Editando')

    @section('content')



    <div id="ttt">

    </div>
      <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1 class="mb-4 text-blue-500 bold">Edite a Novidade</h1>
        <form action="{{ route('lista_novidades.update', $novidades->id) }}" method="post">

            @csrf
            @method('PUT')
  
      <div class="form-group">
        <label for="image"><img src="/img/img.png" class="w-16" alt=""></label>
        <input type="file" id="image" name="image" class="from-control-file" value="{{$novidades->image}}">
      </div>
  
          <div class="form-group">
            <label for="descricao">Descricão</label>
           <textarea name="descricao" id="descricao" class="form-control" placeholder="O que vai acontecer no evento?">{{$novidades->descricao}}</textarea>
          </div>
  
        <input type="submit" class="btn btn-primary mt-2" value="editar novidade" id="botao">
        </form>
      </div>

    @endsection