<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <!--Import Google Icon Font-->
    <link type="text/css" rel="stylesheet" href="../../resources/css/icons.css">
    <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="../../resources/css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../../resources/css/index_public.css">
    <link type="text/css" rel="stylesheet" href="../../resources/css/standard.css">
</head>
<body>
<nav>
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
            
          </ul>
        </div>
      </nav>
        </ul>
      </div>
    </nav>
    <div>
      <div class="center  teal lighten-1" >
          <p class="flow-text z-depth-5 white-text" >Ingrese su informacion</p>
      </div>
    <div class="row">

      <div class="col s12">
        <p></p>
        <p></p>
      </div>
      <div class="col s4">
        <!-- Promo Content 1 goes here -->
      </div>
      <div class="col s4">
          <form action="">
            <label>Correo</label>
            <input type="email" name="" placeholder="Correo...">
            <label>Contraseña</label>
            <input type="password" name="" placeholder="Contraseña...">
            <a class="waves-effect waves-light btn" href="bienvenido.php">Ingresar</a>
          </form>
      </div>
      <div class="col s4">
        <!-- Promo Content 3 goes here -->
      </div>

    </div>
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


  <script type="text/javascript" src="../../resources/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="../../resources/js/materialize.js"></script>
  <script type="text/javascript" src="../../resources/js/standard.js"></script>
      
</body>
</html>