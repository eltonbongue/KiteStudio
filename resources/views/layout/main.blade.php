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
    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                   
                    <a href="" class="navbar-brand">
                        <img src="/img/letra-k.png" alt="KiteStudio">
                    </a>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">home</a>
                        </li>

                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">criar eventos</a>
                        </li>
    
                        <li class="nav-item">
                            <a href="/trabalhos.blade.php" class="nav-link">trabalhos</a>
                        </li>
    

                        <li class="nav-item">
                            <a href="/login.blade.php" class="nav-link">login</a>
                        </li>


                        <li class="nav-item">
                            <a href="/sobre.blade.php" class="nav-link">sobre</a>
                        </li>
                    </ul>
                
                </div>
            </nav>
        </header>

       

        @yield('content')

            <footer>
                <p>KiteStudio &copy; 2024</p>
            </footer>

            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
