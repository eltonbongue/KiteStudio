@extends('layout.main_admin')

    @section('title', 'Usuário')

    @section('content')

    
      
    <div class="col-md-10 offset dashboard-title-container">
      <h3>Lista de usuários</h3>
    </div>
      
          <div>
              @if(count($users) > 0)
  
                  <table class="table">
                      <thead>
                              <tr class="p-4 bg-slate-300">
                                  <th scope="col">#</th>
                                  <th scope="col">Nome</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Acções</th>
                              </tr>
  
                      </thead>
                      
                 <tbody class="p-4 bg-white">
                              @foreach ($users as $users )
                                      <tr>
                                          <td scropt="row">{{ $loop->index + 1 }}</td>
                                          <td>{{$users->name}}</td>
                                          <td>{{$users->email}}</td>

                                          <td class="flex "><a href=""><img src="/img/editar.png" class="w-4 mr-4" alt=""></a>
                                          <form action="{{ route('users.destroy', $users->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"><img src="/img/lixo.png" class="w-4" alt=""></button>
                                        </form>
                                          
                                      </tr>
                                 
                              @endforeach
  
                      </tbody>

                  </table>
                  
              @endif
  
          </div>
  
    @endsection