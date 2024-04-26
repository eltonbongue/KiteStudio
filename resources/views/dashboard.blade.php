@extends('layout.main_login')

    @section('title', 'sessao')

    @section('content')

     
    <div class="col-md-12" id="events-container">
    @foreach ($galeria as $galeria )

                      @foreach ($sessao as $sessions )
               
                              
                            
  <div class="row" id="cards-container">
                
    @if ( $galeria->user_id === $sessions->user_id)
       
            <div >
                
             <img src="/img/galeria/{{ $galeria->image}}" alt="" width="300px">
    
            </div>
            <div>  
                <a href="/img/galeria/{{ $galeria->image}}" download="fotoKitestudio.jpg" class="btn btn-primary" id="botao">baixar</a>  
               </div> 
            @endif
      
  </div>

        @endforeach     
        @endforeach     
    </div>

@endsection