@extends('layout.main_admin')

    @section('title', 'Lista_galeria')

    @section('content')


    <div class="col-md-10 offset dashboard-title-container">
        <h3>Galeria lista</h3>
      </div>

      <label class="relative block">
        <span class="sr-only">Search</span>
        <span class="absolute inset-y-0 left-0 flex items-center pl-2">
          <svg class="h-5 w-5 fill-slate-300" viewBox="0 0 20 20"><!-- ... --></svg>
        </span>
        <div class="flex flex-row">
            <form action="" method="get" class="w-full max-w-2xl">
        <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm " placeholder="pesquisar por um nome" type="text" name="search" id="search" />
    </form>
        <img src="/img/pesq.png" class="ml-2" alt=""> 

      </div>
    </label>
        
            <div>
                @if(count($galeria) > 0)
    
                    <table class="table">
                        <thead>
                                <tr class="p-4 bg-slate-300">
                                    <th scope="col">#</th>
                                    <th scope="col">Imagem</th>
                                    <th scope="col">Video</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Acções</th>
                                </tr>
    
                        </thead>
                                
                        <tbody class="p-4 bg-white">
                                @foreach ($galeria as $galeria) 
                                        <tr>
                                            <td scropt="row">{{ $loop->index + 1 }}</td>
                                            <td><a href="img/eventos/{{$galeria->id}}">{{$galeria->image}}</a></td>
                                            <td><a href="img/eventos/{{$galeria->id}}">{{$galeria->video}}</a></td>
                                            <td>{{ $galeria->user->name}}</td>
                                         
                                            <td class="flex"><a href=""><img src="/img/editar.png" class="w-4 mr-4" alt=""></a>
                                            <form action="{{ route('lista_galeria.destroy', $galeria->id) }}" method="POST">
                                                 @csrf
                                                 @method('DELETE')
                                            <button type="submit"><img src="/img/lixo.png" class="w-4" alt=""></button>
                                            </form>
                                            </td>
                                        </tr>
                                @endforeach
    
                        </tbody>
                    </table>
                    
                @endif
    
            </div>
    
    
    






    @endsection