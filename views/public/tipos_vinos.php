<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>vinos</title>
    <!--Import Google Icon Font-->
    <link type="text/css" rel="stylesheet" href="../../resources/css/icons.css">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../resources/css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../../resources/css/standard.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
  <body>

    <!--se crea la barra de navegacion-->
    <div class="navbar-fixed">
      <nav class="nav-extended" >
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo">  AlphaVino</a>
          <a href="#" data-target="mobile-vinos" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
          <!--se crea el buscador-->
            <li>
              <div class="input-field col s12 m4 center">
                  <input id="search" type="search" required>
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
              </div>
            </li>
            <li><a href="tipos_vinos.php">Tipo</a></li>
            <li><a href="pais.php">Pais</a></li>
            <li><a href="marca.php">Marca</a></li>
            <li><a href="perfil.php">Perfil</a></li>  
          </ul>
        </div>
      </nav>

      <!--se crea el menu del modo responsive-->
      <ul class="sidenav" id="mobile-vinos">
        <li>
          <div class="input-field col s12 m4">
              <input id="search" type="search" required>
              <label class="label-icon" for="search"><i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
          </div>
        </li>
        <li><a href="tipos_vinos.php">Tipo</a></li>
        <li><a href="pais.php">Pais</a></li>
        <li><a href="marca.php">Marca</a></li>
        <li><a href="perfil.php">Perfil</a></li>
      </ul>
    </div>

    <section>

    <div class="parallax-container">
      <div class="parallax"><img src="../../resources/img/bodega.jpeg"></div>
    </div>

    <h1 class="center">Tipos de vinos</h1>

    <div class="row">
      
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="card-image">
            <img src="../../resources/img/m.jpg">
            <span class="card-title">Vino Blanco</span>
          </div>
          <div class="card-action">
            <a href="#">ver mas</a>
          </div>
        </div>
      </div>

      <div class="col s12 m6 l4">
        <div class="card">
          <div class="card-image">
            <img src="../../resources/img/xc.jpg">
            <span class="card-title">Vino Rosado</span>
          </div>
          <div class="card-action">
            <a href="#">ver mas</a>
          </div>
        </div>
      </div>

      <div class="col s12 m6 l4">
        <div class="card">
          <div class="card-image">
            <img src="../../resources/img/x.jpg">
            <span class="card-title">Vino Tinto</span>
          </div>
          <div class="card-action">
            <a href="tinto.php">ver mas</a>
          </div>
        </div>
      </div>

     
      
    </div>

    </section>

    <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">AlphaVino</h5>
                <p class="grey-text text-lighten-4">Esta es la pagina mas buscada para la venta de vino.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
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
            © 2014 Copyright AlphaVino
            <a class="grey-text text-lighten-4 right" href="#!">AlphaVino</a>
            </div>
          </div>
        </footer>
  
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../../resources/js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../../resources/js/materialize.js"></script>
      
      <script>
        $(document).ready(function(){
          $('.parallax').parallax();
          $('.sidenav').sidenav();
          $('.tabs').tabs();
          $('.carousel').carousel();
          fullwidth: true
        });
      </script>
    </body>
  </html>