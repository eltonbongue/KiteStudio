@extends('layout.main_admin')

    @section('title', 'Lista_eventos')

    @section('content')



  <div class="col-md-10 offset dashboard-title-container">
    <h3>Novidades</h3>
  </div>
    
        <div class="col-md-10 offset dashboard-eventos-container">
            @if(count($novidades) > 0)

                <table class="table">
                    <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">imagem</th>
                                <th scope="col">descrição</th>
                                <th scope="col">acções</th>
                            </tr>

                    </thead>
               

                    <tbody>
                            @foreach ($novidades as $novidade )
                            
                                    <tr>
                                        <td scropt="row">{{ $loop->index + 1 }}</td>
                                        <td><a href="img/eventos/{{$novidade->id}}">{{$novidade->image}}</a></td>
                                        <td>{{$novidade->descricao}}</td>
                                        <td><a href="">editar</a> <a href="">apagar</a></td>
                                    </tr>
                            @endforeach

                    </tbody>
                </table>
            @endif

        </div>




    @endsection