<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!--font google-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
        <!--fim-->
          <link rel="stylesheet" href="/css/styles.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="/js/script.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        
        <header class="p-2 h-24 bg-gradient-to-r from-cyan-500 to-blue-500">
                        <nav>
                                <ul class="flex justify-end items-center h-16 space-x-10"> 
                                    <span class="logotipo md:w-48 lg:w-32 xl:w-24 
                                    transition-all duration-300 ease-in-out"><a href="" id="logo"> <strong>KiteStudio</strong></a></span>
                                    <li><a href="/" class="nav-link">home</a></li>
                                    <li><a href="/sobre.blade.php" class="nav-link">sobre</a></li>
                                    <li><a href="/login" class="nav-link-principal"><button type="button" class="btn btn-primary" id="entrar_login"><strong>Entrar</strong> </button></a></li>
                                </ul>

                        </nav>
                    </header>
        

        

        
       

        
        <main>

            <div class="container-fluid">
                <div class="row">
                    {{--Flash Messages--}}
                    @if (session('msg'))
                    <p class="msg">{{session('msg')}}</p>
                    @endif
                @yield('content')
                </div>


            </div>
        </main>
        
        <footer class="p-32 h-24 bg-gradient-to-r from-cyan-500 to-blue-500">

            <div class="container lg:flex lg:items-center lg:justify-center">


                <ul class="flex space-x-8">
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-800 hover:underline">Sobre</a></li>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-800 hover:underline">Informações</a></li>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-800 hover:underline">Contactos</a></li>
                </ul>


            </div>
            <p class="text-center mt-4">KiteStudio &copy; 2024</p>
        </footer>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>
