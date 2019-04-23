<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>productos</title>
    <link rel="stylesheet" href="../../resources/css/materialize.css">
    <link type="text/css" rel="stylesheet" href="../../resources/css/standard.css">
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
    <div>
    <div class="center  teal lighten-1" >
        <p  class="flow-text z-depth-5 white-text" >informacion de ventas</p>
    </div>
    <div class=center>
    <div class="col s7 push-s5"><span class="flow-text"></span>
    <div class="center">
      <img src="../../resources/img/grafica.jpg" alt="">
      </div>
      </div>
    </div>
    <div class="row">

      <div class="col s7 push-s5"><span class="flow-text">lista de ventas</span>
      <div>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <a class=" waves-effect waves-light btn"> <i class="material-icons">search</i>buscar</a>
       <div class="rigth input-field col s6">
      <input value="" id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2"></label>
    </div>
      </div>
     
      <table>
        <thead>
          <tr>
              <th>id_producto</th>
              <th>producto</th>
              <th>marca</th>
              <th>fecha</th>
              <th>cliente</th>
              <th>total</th>
          </tr>
        </thead>

        <tbody>
          <tr>
           
          </tr>
          <tr>
            
          </tr>
          <tr>
          </tr>
        </tbody>
      </table>
            
      </div>
      <div class="col s5 pull-s7"><span class="flow-text">editar informacion</span>
      
      <div class="row">
    <div class="input-field col s6">
      <input value="" id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">id_producto</label>
    </div>
    <div class="input-field col s6">
      <input value="" id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">nombre</label>
    </div>
    <div class="input-field col s6">
      <input value="" id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">marca</label>
    </div>
    <div class="input-field col s6">
      <input value="" id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">fecha </label>
    </div>
    <div class="input-field col s6">
      <input value="" id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">cliente</label>
    </div>
    <div class="input-field col s6">
      <input value="" id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">total</label>
    </div>
  </div>
      </div>
    </div>
    </div>
    <div class="left">
    
    <a class="waves-effect waves-light btn">Guardar</a>
    <a class="waves-effect waves-light btn"><i ></i>Modificar</a>
    <a class="waves-effect waves-light btn"><i ></i>Eliminar</a>
    </div>
          
  <script src="../../resources/js/materialize.js"></script>
  <script type="text/javascript" src="../../resources/js/standard.js"></script>

</body>
</html>