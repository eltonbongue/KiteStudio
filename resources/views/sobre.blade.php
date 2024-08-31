@extends('layout.main')

    @section('title', 'Sobre')

    @section('content')

<h1 class="text-center mt-4">Sobre</h1>

<div>

    <h3 class="text-center mt-8 mb-10">Deixe o seu comentário sobre os nossos serviços</h3>
    <div class="flex flex-row justify-center m-4">
      <label for="exampleFormControlInput1" class="text-gray-500 m-2">Nome</label>
      <input type="text" class=" border-blue-600 border-b-2 w-50 hover:border-gray-400 focus:outline-none focus:text-gray-900" placeholder="introduza seu nome">
    </div>
    <div class="flex flex-row justify-center m-4">
      <label for="email" class="text-gray-500 m-2">email</label>
      <input type="email" class="flex border-blue-600  border-b-2 w-50 hover:border-gray-400 focus:outline-none"  placeholder="introduza seu email">
    </div>
    <div class="col-md-6 offset-md-3">
      <label for="exampleFormControlTextarea1" class="text-gray-500 mt-4">Deixe o seu comentário sobre os nossos serviços</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

  </div>

  <div id="mapa">
    <h4 id="titulo_map">Localização</h4>
    <a href="">
     <center><iframe style="width: 50%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.362509113067!2d13.42502197407578!3d-8.845801291208389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51fbdd53298261%3A0x4e2ae5e21a19951d!2sPumangol%20Cacuaco%20AE!5e0!3m2!1spt-PT!2sao!4v1709406161640!5m2!1spt-PT!2sao" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
    </a>
    
  </div>

@endsection