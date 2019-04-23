<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>vinos</title>
    <!--Import Google Icon Font-->
    <link type="text/css" rel="stylesheet" href="../../resources/css/icons.css">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../resources/css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../../resources/css/index_public.css">
    <link type="text/css" rel="stylesheet" href="../../resources/css/standard.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
  <body>
    <header>
      <?php
      require_once '../../core/helpers/public.php'
      ?>
    </header>
    
    <section>

    <div class="parallax-container">
      <div class="parallax"><img src="../../resources/img/bodega.jpeg"></div>
    </div>

    <h1 class="center-align">Bienvenidos</h1>

    <div class="row">
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image">
              <img src="../../resources/img/fondo_principal.jpg">
              <span class="card-title">Vino Blanco</span>
              <a href="tipos_vinos.php" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
            </div>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="card">
            <div class="card-image">
              <img src="../../resources/img/fondo_principal.jpg">
              <span class="card-title">Vino Rosa</span>
              <a href="tipos_vinos.php" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
            </div>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="card">
            <div class="card-image">
              <img src="../../resources/img/fondo_principal.jpg">
              <span class="card-title">Vino Tinto</span>
              <a href="tinto.php" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
            </div>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="card">
            <div class="card-image">
              <img src="../../resources/img/fondo_principal.jpg">
              <span class="card-title">Vino por Pais</span>
              <a href="tipos_vinos.php" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
            </div>
          </div>
        </div>
    </div>

    <div class="divider"></div>

    <div class="carousel">
      <a class="carousel-item" href="#one!"><img src="../../resources/img/fondo_principal.jpg"></a>
      <a class="carousel-item" href="#two!"><img src="../../resources/img/calidad.jpg"></a>
      <a class="carousel-item" href="#three!"><img src="../../resources/img/consumidores.jpg"></a>
      <a class="carousel-item" href="#four!"><img src="../../resources/img/bodega_espacio.jpg"></a>
      <a class="carousel-item" href="#five!"><img src="../../resources/img/logo.jpg"></a>
    </div>
    <a class="btn-floating btn-large waves-effect waves-light red"  href="ayuda.php"><i class="material-icons">announcement</i></a>
</section>
    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">AlphaVino</h5>
            <p class="grey-text text-lighten-4">Esta es la pagina mas buscada para la venta de vino.</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Contactanos</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">facebook</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
              <li><a class="grey-text text-lighten-3" >correo : alpahvino123@gmail.com</a></li>
              <li><a class="grey-text text-lighten-3" >tel:71-00-88-30</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2019 Copyright AlphaVino
        <a class="grey-text text-lighten-4 right" href="#!">AlphaVino</a>
        </div>
      </div>
    </footer>
    <!--<div class="navbar-fixed">
      <nav class="nav-extended">
        <div class="nav-wrapper">
          <nav>
                <form class="row">
                  <div class="input-field col s12 m4">
                    <input id="search" type="search" required>
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                  </div>
                </form>
            </nav>
          <a href="#" class="brand-logo center">Logo</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
          </ul>
        </div>
        <div class="nav-content">
          <ul class="tabs tabs-transparent">
            <li class="tab"><a href="#test1">Test 1</a></li>
            <li class="tab"><a class="active" href="#test2">Test 2</a></li>
            <li class="tab"><a href="#test3">Disabled Tab</a></li>
            <li class="tab"><a href="#test4">Test 4</a></li>
          </ul>
        </div>
      </nav>

      <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>

      <div id="test1" class="col s12">Test 1</div>
      <div id="test2" class="col s12">Test 2</div>
      <div id="test3" class="col s12">Test 3</div>
      <div id="test4" class="col s12">Test 4</div>
    </div>-->
  
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../../resources/js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../../resources/js/materialize.js"></script>
      <script type="text/javascript" src="../../resources/js/standard.js"></script>
      
    
      
    </body>
  </html>