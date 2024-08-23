<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <link rel="stylesheet" href="/css/style_admin.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title')</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
</head>

<body class="">

  

  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          KT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
     <strong>Admin</strong>   
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="{{$DA}}">
            <a href="dashboard_admin.blade.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            
          
          <li>
            <a href="/auth/register.blade.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Registrar usuario</p>
            </a>
          </li>
         
          <li class="{{$U}}">
                     <a href="users.blade.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Perfil do usuário</p>
            </a>
          </li>

          <li class="{{$E}}">
            <a href="novidades.blade.php">
              <i class="now-ui-icons design_app"></i>
              <p>Criar Novidades</p>
            </a>
          </li>

          <li class="{{$LE}}">
            <a href="lista_novidades.blade.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Lista de Novidades</p>
            </a>
          </li>

          <li class="{{$G}}">
            <a href="galeria.blade.php">
              <i class="now-ui-icons design_app"></i>
              <p>Galeria</p>
            </a>
          </li>

          <li class="{{$LG}}">
            <a href="lista_galeria.blade.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Lista da galeria</p>
            </a>
          </li>
            
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      
      <!-- End Navbar -->
      
        <div class="p-8 bg-blue-500 mb-32 ">
        <ul class="flex justify-center items-center space-x-8">
          <li>Home</li>
          <li>Galeria</li>
          <li>sair</li>
        </ul>
      </div>
      <div class="content">

      @yield('content')

      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  KiteStudio
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  Sobre nós
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>