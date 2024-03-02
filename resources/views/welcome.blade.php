
    @extends('layout.main')

    @section('title', 'KiteStudio')

    @section('content')

        

        <div class="container">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/img/foto1.jpg" class="d-block w-100" height="350px" alt="...">
                  </div>
                  <div class="carousel-item ">
                    <img src="/img/foto2.jpg" class="d-block w-100" height="350px" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/img/foto3.jpg" class="d-block w-100" height="350px" alt="...">
                  </div>
                </div>
              </div>
        </div>



        <div class="col-md-12" id="events-container">
          <h2>Novidades</h2>
          <p class="subtitle">Veja as próximas fotos</p>

          <div class="row" id="cards-container">
            @foreach ($eventos as $evento )
            <div class="card col-md-3">
              <img src="/img/foto3.jpg" alt="{{ $evento->titulo }}">

              <div class="card-body">
                <p class="card-date">10/8/2001</p>
              
               
                <a href="/img/foto2.jpg" download="fotoKitestudio.jpg" class="btn btn-primary" id="botao">baixar</a> <center></center>
              </div>
            </div>  

            @endforeach


          </div>

         
          

        </div>

    @endsection

     