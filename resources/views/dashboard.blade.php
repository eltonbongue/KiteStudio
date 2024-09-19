@extends('layout.main_login')

    @section('title', 'sessao')

    @section('content')

     
    <div class="col-md-12" id="events-container">
    @foreach ($galeria as $galeria )

            @if(!is_null($galeria->image))
             <div class="row" id="cards-container">
                <!-- Verifica se há uma imagem -->
                @if (!is_null($galeria->image))
                <div>
                
                    <img src="/img/galeria/{{ $galeria->image}}" alt="" width="300px">
           
                   </div>
                @endif
                            
  
                
           
            <div>  
                <a href="/img/galeria/{{ $galeria->image}}" download="fotoKitestudio.jpg" class="btn btn-primary" id="botao">baixar</a>  
               </div> 
           
             </div>
             @endif
        @endforeach     
        
    </div>

@endsection