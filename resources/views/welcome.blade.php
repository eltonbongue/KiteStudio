
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
              
          
          <div class="grid grid-cols-2 gap-4 lg:grid-cols-3">
              
       <a href="#servicos" class="inline-flex items-center text-yellow-900 bg-orange-500 py-2 px-6 hover:bg-gray-800 rounded">
              serviços
          
          </a>

            <a href="/sobre.blade.php" class="inline-flex items-center text-yellow-900 bg-orange-500 py-2 px-6 hover:bg-gray-800 rounded">
              sobre
            </a>
            
              <button class="col-span-2 lg:col-span-1 inline-flex items-center text-yellow-900 bg-orange-500 py-2 px-6 hover:bg-gray-800  rounded"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-3 ">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
                  novidades
                </button>



              </div>
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

        
              <div class="space-y-16 bg-gray-300 mb-36" id="servicos">
                  <h3 class="text-2xl text-gray-500 font-semibold text-center mb-8 mt-8">Conheça os nossos serviços</h3>

                  <div class="lg:grid lg:grid-cols-2 lg:grid-rows-2 lg:gap-8 space-y-6">
                      <div class=" lg:col-span-1 lg:row-span-2 lg:h-full"><img src="../img/foto3.jpg" class="w-full h-full object-cover" alt="">
                      
                      </div>
                      <div class=" lg:col-span-1 lg:h-24 lg:space-y-40 space-y-4">
                        <div class="mb-16">
                        <h3 class="text-gray-800 font-black mb-3 m-8">Fotos profissionais</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem perspiciatis perferendis en
                          im, eligendi vel vitae ea quos labore debitis rerum distinctio. Autem id 
                        i animi unde, sed saepe enim deleniti iste.</p>

                      </div>

                        <div class="lg:col-span-1 lg:h-72 lg:mt-10 space-y-4"><img src="../img/videos.jpg" class="w-full h-full object-cover" alt="">
                          <h3 class="text-gray-800 font-black mt-4 m-8">Videos profissionais</h3>
                          <p class="mt-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem perspiciatis perferendis enim, eligendi vel vitae ea quos labore debitis rerum distinctio. Autem id 
                            ipsa veniam voluptatem. Nece
                            ssitatibus doloremque odit culpa. Lorem ipsum dolor 
                            sit amet consectetur adipisicing elit. Ut voluptate maxime delen
                           </p>
                          </div>
                      </div>
                      </div>
                 
                  

                  <div class="lg:grid lg:grid-cols-4 lg:grid-rows-2 lg:gap-8">
                    <div class=" lg:col-span-2 lg:row-span-2 lg:h-96"><img src="../img/quadro4.jpg" class="w-full h-full object-cover" alt="">
                    <div class=" col-span-2 h-36"><h3 class="text-gray-800 font-black mb-3 m-8"> Quadros profissionais</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut voluptate maxime deleniti rem veritatis dicta temporibus dolorum! Voluptas, consequuntur pariatur atque et modi animi unde, sed saepe enim deleniti iste.</p>
                    
                    </div>
                    </div>
                      <div class="lg:col-span-2 lg:row-span-1 lg:h-72 lg:mb-16 space-y-4"><img src="../img/flyers.jpg" class="w-full h-full object-cover" alt="">
                    <div class="h-32">
                      <h3 class="text-gray-800 font-black mb-3 m-8">Flyers profissionais</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                         Vero, non repudiandae! Dolor, totam laborum! Dolorum, natus.
                         
                      </p>
                        
                        </div>

                        </div>

                </div>
                
              </div>


    @endsection

     