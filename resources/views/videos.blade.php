@extends('layout.main_login')

    @section('title', 'sessao')

    @section('content')
    <div class="col-md-12"  id="events-container">
        @foreach ($galeria as $galeria )

        @if(!is_null($galeria->video))
                                
      <div class="row" id="cards-container">
                 <!-- Verifica se há um video-->
                @if (!is_null($galeria->video))   
                <div class="">
                    
                    <video  class="video" controls>
                        <source src="/videos/galeria/{{ $galeria->video }}" type="video/mp4">
                        Seu navegador não suporta o elemento de vídeo.
                    </video>
                    @endif

                    
        
                </div>
                <div>  
                    <a href="/videos/galeria/{{ $galeria->video}}" download="{{ $galeria->video }}" class="btn btn-primary d-block w-100" id="botao">baixar</a>  
                   </div> 
               
      </div>
    
      @endif
            @endforeach     
            
        </div>

@endsection