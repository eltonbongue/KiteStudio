<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Galeria') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>




    <div class="col-md-12" id="events-container">
        <h2>Novidades</h2>
        <p class="subtitle">Veja as próximas fotos</p>
    
        <div class="row" id="cards-container">
         
          <div class="card col-md-3">
            <img src="/img/eventos/flyers.jpg" width="150px">
    
            <div class="card-body">
              <p class="card-date">12/5/2024</p>
            
             
             {{--<a href="/img/foto2.jpg" download="fotoKitestudio.jpg" class="btn btn-primary" id="botao">baixar</a> <center></center>--}} 
           
            </div>
          </div>  
   
        
    
    
        </div>
    
      </div>
</x-app-layout>

