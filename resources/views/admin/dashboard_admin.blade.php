@extends('layout.main_admin')

    @section('title', 'KiteStudio')

    @section('content')


 <div class="grid grid-cols-2 gap-16 m-8">

<div class="p-16 border-gray-500 border-l-4 border-b-4 rounded-3xl bg-white">Utilizadores   <h1 class="text-2xl text-right font-black">{{ $userCount }} <img src="/img/usuarios.png" class="w-8" alt=""> </h1></div>
<div class="p-16 border-gray-500 border-l-4 border-b-4 rounded-3xl bg-white">Novidades <h1 class="text-2xl text-right font-black">{{ $novidadeCount }} <img src="/img/news.png" class="w-8" alt=""></h1></div>
<div class="p-16 border-gray-500 border-l-4 border-b-4 rounded-3xl bg-white">Fotos <h1 class="text-2xl text-right font-black">{{ $galeriaCount }} <img src="/img/foto.png" class="w-8" alt=""></h1></div>
<div class="p-16 border-gray-500 border-l-4 border-b-4 rounded-3xl bg-white">Admin <h1 class="text-2xl text-right font-black">{{ $adminCount }} <img src="/img/admins.png" class="w-8" alt=""></h1></div>

 </div>

    @endsection