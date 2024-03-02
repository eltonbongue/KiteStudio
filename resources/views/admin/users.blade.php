@extends('layout.main_admin')

    @section('title', 'Usuário')

    @section('content')

    
      
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Editar Perfil</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label for="password" value="{{ __('Password') }}">Senha</label>
                        <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label for="name" value="{{ __('Name') }}">Nome do usuário</label>
                        <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label  for="email" value="{{ __('Email')}}">Email</label>
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for="password_confirmation" value="{{ __('Confirm Password') }}">Confirmar password</label>
                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Último nome</label>
                        <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Endereço</label>
                        <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Cidade</label>
                        <input type="text" class="form-control" placeholder="City" value="Mike">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>País</label>
                        <input type="text" class="form-control" placeholder="Country" value="Andrew">
                      </div>
                    </div>
                   
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Sobre mim</label>
                        <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <button type="button" class="btn btn-success">{{ __('Salvar') }} </button>
                        
                      </div>
                    </div>
                  </div>


                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/Github.jpg" alt="...">
                    <h5 class="title">Elton Bongue</h5>
                  </a>
                  <p class="description">
                    Elton Bongue
                  </p>
                </div>
                <p class="description text-center">
                  "Dodge <br>
                  I love this car <br>
                  thats why,i'm working hard"
                </p>
              </div>
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

    @endsection