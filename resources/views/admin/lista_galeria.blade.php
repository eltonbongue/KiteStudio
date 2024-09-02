@extends('layout.main_admin')

    @section('title', 'Lista_galeria')

    @section('content')


    <div class="col-md-10 offset dashboard-title-container">
        <h3>Galeria lista</h3>
      </div>
        
            <div>
                @if(count($galeria) > 0)
    
                    <table class="table">
                        <thead>
                                <tr class="p-4 bg-slate-300">
                                    <th scope="col">#</th>
                                    <th scope="col">imagem</th>
                                    <th scope="col">Acções</th>
                                </tr>
    
                        </thead>
                                
                        <tbody class="p-4 bg-white">
                                @foreach ($galeria as $galeria)
                                        <tr>
                                            <td scropt="row">{{ $loop->index + 1 }}</td>
                                            <td><a href="img/eventos/{{$galeria->id}}">{{$galeria->image}}</a></td>

                                            <td class="flex"><a href="" class="btn btn-info edit-btn mr-4 rounded-2xl"><ion-icon name="create-outline"> </ion>editar</a>
                                            <form action="{{ route('lista_galeria.destroy', $galeria->id) }}" method="POST">
                                                 @csrf
                                                 @method('DELETE')
                                            <button type="submit" class="btn btn-danger delete-btn" style="margin-top:5px"><ion-icon name="trash-outline"></ion>apagar</button>
                                            </form>
                                            </td>
                                        </tr>
                                @endforeach
    
                        </tbody>
                    </table>
                    
                @endif
    
            </div>
    
    
    






    @endsection