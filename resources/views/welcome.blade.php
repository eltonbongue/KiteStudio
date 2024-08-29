
    @extends('layout.main')

    @section('title', 'KiteStudio')

    @section('content')

   

     <div id="carouselExampleSlidesOnly" class="carousel slide mt-10" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/img/foto1.jpg" class="d-block w-100 h-96"  alt="...">
                  </div>
                  <div class="carousel-item ">
                    <img src="/img/foto2.jpg" class="d-block w-100 h-96" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/img/foto3.jpg" class="d-block w-100 h-96" alt="...">
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

     