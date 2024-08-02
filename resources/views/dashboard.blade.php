@extends('layout.main_login')

    @section('title', 'sessao')

    @section('content')

     
    <div class="col-md-12" id="events-container">
    @foreach ($galeria as $galeria )
                            
  <div class="row" id="cards-container">
                
            <div>
                
             <img src="/img/galeria/{{ $galeria->image}}" alt="" width="300px">
    
            </div>
            <div>  
                <a href="/img/galeria/{{ $galeria->image}}" download="fotoKitestudio.jpg" class="btn btn-primary" id="botao">baixar</a>  
               </div> 
           
  </div>

        @endforeach     
        
    </div>

@endsection