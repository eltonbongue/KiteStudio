@extends('layout.main_admin')

    @section('title', 'Usuário')

    @section('content')

    
      
    <div class="col-md-10 offset dashboard-title-container">
      <h1>Lista de usuários</h1>
    </div>
      
          <div class="col-md-10 offset dashboard-eventos-container">
              @if(count($users) > 0)
  
                  <table class="table">
                      <thead>
                              <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Nome</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Acções</th>
                              </tr>
  
                      </thead>
                 
                              @foreach ($users as $users )
                                      <tr>
                                          <td scropt="row">{{ $loop->index + 1 }}</td>
                                          <td>{{$users->name}}</td>
                                          <td>{{$users->email}}</td>
                                          <td><a href="">editar</a> <a href="">apagar</a></td>
                                      </tr>
                                 
                              @endforeach
  
                      </tbody>

                  </table>
                  
              @endif
  
          </div>
  
    @endsection