
    @extends('layout.main')

    @section('title', 'KiteStudio')

    @section('content')





    <div style="background: url(../img/ttt.png); height: 450px;">
      <div class="flex items-center justify-center h-full mx-auto px-4 ">
          <div>
              <div class="text-center"> 
                  <h1 class="text-gray-100 text-3xl font-bold">Já ouviu falar sobre a <strong>Kitestudio?</strong></h1>
                  <p>conheça os serviços do melhor estúdio de Luanda</p>
              </div>
              
          
          

          
          <form action="" class="mt-7 space-x-4">
              
            <button class="inline-flex items-center text-yellow-900 bg-orange-500 py-2 px-6 hover:bg-gray-800 rounded">
              serviços
            </button>

            <button class="inline-flex items-center text-yellow-900 bg-orange-500 py-2 px-6 hover:bg-gray-800 rounded">
              sobre
            </button>
            
              <button class="inline-flex items-center text-yellow-900 bg-orange-500 py-2 px-6 hover:bg-gray-800  rounded"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-3 ">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
                  novidades
                </button>



          </form>
      </div>
      </div>
  </div>
   

    
        

            
    

        <div class="col-md-12" id="events-container">
          <h2>Novidades</h2>
          <p class="subtitle">Veja as próximas fotos</p>

          <div class="row" id="cards-container">
            @foreach ($novidades as $novidades )
            <div class="card col-md-3">
              <img id="img_principal" src="/img/eventos/{{ $novidades->image }}" alt="{{ $novidades->descricao }}">

              <div class="card-body">
                <p class="card-date">{{ $novidades->descricao}}</p>
              
               
               {{--<a href="/img/foto2.jpg" download="fotoKitestudio.jpg" class="btn btn-primary" id="botao">baixar</a> <center></center>--}} 
             
              </div>
            </div>  

            @endforeach


          </div>

        </div>

    @endsection

     