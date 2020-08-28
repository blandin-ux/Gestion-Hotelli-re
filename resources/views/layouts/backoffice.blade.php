<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">

    <title>
      @yield('titre')
    </title>


    <!-- Bootstrap core CSS -->

<link href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/monstyle.css')}}">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
    
    
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome.css')}}">

  </head>
  
  <body>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <h3 class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" >Altcom Boutique</h3>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="/deconnexion"> {{Auth::user()->name}} </a>
        </li>
      </ul>
    </nav>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="/facture/index">
              <span data-feather="home"></span>
              Vente Facture <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/achats">
              <span data-feather="file"></span>
              Vente Ticket
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/clients">
              <span data-feather="file"></span>
              Gestion des clients
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/liste-categories">
              <span data-feather="file"></span>
              Gestion des Catégories
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/gestion-articles">
              <span data-feather="file"></span>
              Gestion des Articles
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/gestion-stocks">
              <span data-feather="file"></span>
              Gestion des Stocks
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/inventaires">
              <span data-feather="file"></span>
              Gestion des Inventaires
            </a>
          </li>

        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="btn-toolbar mb-2 mb-md-0">

          <div class="btn-control mr-2">
            <a herf=""class="btn btn-sm btn-outline-success"><i class="fa fa-whatsapp"></i></a>
            <a herf=""class="btn btn-sm btn-outline-secondary"><i class="fa fa-github"></i></a>
            <a href=""class="btn btn-sm btn-outline-primary"><i class="fa fa-facebook"></i></a>
            <a href=""class="btn btn-sm btn-outline-info"><i class="fa fa-twitter"></i></a>
            <a href=""class="btn btn-sm btn-outline-danger"><i class="fa fa-youtube"></i></a>            
          </div>

        </div>
      </div>

        <div>
          @yield('corps')
        </div>

      </div>
    </main>
  </div>
</div>

</html>
