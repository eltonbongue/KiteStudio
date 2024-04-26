@extends('layout.main_admin')

    @section('title', 'Lista_galeria')

    @section('content')


    <div class="col-md-10 offset dashboard-title-container">
        <h1>Galeria lista</h1>
      </div>
        
            <div class="col-md-10 offset dashboard-eventos-container">
                @if(count($galeria) > 0)
    
                    <table class="table">
                        <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">imagem</th>
                                <th scope="col">Acções</th>
                                </tr>
    
                        </thead>
                                
                        <tbody class="test">
                                @foreach ($galeria as $galeria)
                                        <tr>
                                            <td scropt="row">{{ $loop->index + 1 }}</td>
                                            <td><a href="img/eventos/{{$galeria->id}}">{{$galeria->image}}</a></td>
                                            <td><a href="">editar</a> <a href="">apagar</a></td>
                                        </tr>
                                @endforeach
    
                        </tbody>
                    </table>
                    
                @endif
    
            </div>
    
    
    






    @endsection