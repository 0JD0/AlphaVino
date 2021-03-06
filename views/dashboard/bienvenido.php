
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>vinos</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
         
            <li><a href="../../views/public/index.php">sitio publico</a></li>
            <li><a href="usuarios.php">usuarios</a></li>
            <li><a href="clientes.php">clientes</a></li>
            <li><a href="productos.php">productos</a></li>
            <li><a href="registro.php">registro de ventas</a></li> 
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
        <li><a href="usuarios.php">usuarios</a></li>
        <li><a href="clientes.php">clientes</a></li>
        <li><a href="productos.php">productos</a></li>
        <li><a href="registro.php">registro de ventas</a></li> 
      </ul>
    </div>

      <!--se crea un subtitulo con un h1-->
    <div class="teal lighten-1" >
        <h1  class="z-depth-5 white-text center" >BIENVENIDO</h1>
    </div>
  
    <div class="center">
            <p class="flow-text blue-text z-depth-1">Grafica De  Nuestros vinos</p>
    </div>

      <!--se crea dos bloque centrado  de dos columnas para la informacion -->
    <div class=center>
      <div class="row">
        <div class="col s7 push-s5"><span class="flow-text">tipo de vino por categoria</span>
          <img src="../../resources/img/tipo de vino.jpg" alt="">
        </div>
        <div class="col s5 pull-s7"><span class="flow-text">calidad del vino</span>
          <img src="../../resources/img/calidad.jpg" alt="">
        </div>
      </div>
    </div>

      <!--se crea footer de la pagina-->
    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">ALPHAVINO</h5>
            <p class="grey-text text-lighten-4">Tienda de Vinos en Linea </p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Informacion General</h5>
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

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../../resources/js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../../resources/js/materialize.js"></script>
      <script type="text/javascript" src="../../resources/js/standard.js"></script>
     
    </body>
  </html>



   <!-- Compiled and minified JavaScript -->
  <script src="../../resources/js/materialize.js"></script>       
</body>
</html>