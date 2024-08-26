@extends('layout.main_admin')

    @section('title', 'Lista_eventos')

    @section('content')



  
    <h3 class="text-mg text-blue-400 font-black text-center m-8">Novidades</h3>
      
        <div>
            @if(count($novidades) > 0)

                <table class="table">
                    <thead>
                            <tr class="p-4 bg-slate-300">
                                <th scope="col">#</th>
                                <th scope="col">imagem</th>
                                <th scope="col">descrição</th>
                                <th scope="col">acções</th>
                            </tr>

                    </thead>
               

                    <tbody class="p-4 bg-white">
                            @foreach ($novidades as $novidade )
                            
                                   <tr>
                                        <td scropt="row">{{ $loop->index + 1 }}</td>
                                        <td><a href="img/eventos/{{$novidade->id}}">{{$novidade->image}}</a></td>
                                        <td>{{$novidade->descricao}}</td>
                                        <td class="flex"><a class="p-2 pr-3 mr-4 bg-green-600 rounded-2xl text-white" href="">editar</a>
                                   
                                        <form action="{{ route('lista_novidades.destroy', $novidade->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                           <button type="submit" class="p-2 pr-3 mr-4 bg-red-600 rounded-2xl text-white">apagar</button> </td>
                                       </form>
                                   
                                    </tr>
                                 
                            @endforeach

                    </tbody>
                </table>
            @endif

        </div>




    @endsection