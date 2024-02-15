
    @extends('layout.main')

    @section('title', 'KiteStudio')

    @section('content')

     
    <img src="/img/kite.jpg" width="100%" height="500px" alt="">

    @foreach ($eventos as $evento)

    <p>{{$evento->title}}</p>
    <p>{{$evento->descricao}}</p>
        
    @endforeach

    @endsection

     