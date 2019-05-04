<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Productos</title>
	<link type="image/png" rel="icon" href="../../resources/img/logo.png" />
	<link type="text/css" rel="stylesheet" href="../../resources/css/materialize.min.css">
	<link type="text/css" rel="stylesheet" href="../../resources/css/icons.css" />
	<link type="text/css" rel="stylesheet" href="../../resources/css/standard.css">

</head>

<body>
	<header>
		<?php
        require_once '../../core/helpers/dashboard.php'
      ?>
	</header>

	<section>
		<div class="container">
			<br>
            <ul id="tabs-swipe-demo" class="tabs center-align">
                <li class="tab col s3">
                    <a href="#test-swipe-1">Inventario</a>
                </li>
                <li class="tab col s3">
                    <a href="#test-swipe-2">Productos</a>
                </li>
                <li class="tab col s3">
                    <a href="#test-swipe-3">Categoría</a>
                </li>
            </ul>

			<div id="test-swipe-1" class="col s12 yellow">Inventario</div>

			<div id="test-swipe-2" class="col s12">
				<!-- utilice autocomplete para buscar -->
				<div class="row">
					<div class="col s12">
						<h3 class="center-align grey-text">Administrar Productos</h3>
						<!-- autocomplete para buscar -->
						<div class="input-field col s6 m6">
							<i class="material-icons prefix">search</i>
							<!-- el search de la izquierda muestra el icono que quires que se vea -->
							<input type="text" id="autocomplete-input" class="autocomplete" />
							<label for="autocomplete-input">Buscar</label>
						</div>
						<div class="input-field col s2 m2">
							<button type="submit" class="btn waves-effect btn-floating indigo tooltipped" data-tooltip="Buscar">
								<i class="material-icons">check</i>
							</button>
							<!-- el check circle es lo mismo q el comentario de arriba -->
						</div>

						<!-- Botón para abrir ventana de agregar -->
						<div class="input-field center-align col s2 m2">
							<!-- Modal Trigger -->
							<a href="#modal-agregar" class="btn waves-effect btn-floating green tooltipped modal-trigger" data-tooltip="Agregar">
								<i class="material-icons">add</i>
							</a>
						</div>

						<!-- se crea la tabla q mostrara los registros -->
						<div class="col s12">
							<div class="card white darken-1">
								<div class="card-content black-text">
									<table class="centered striped responsive-table">
										<thead>
											<tr>
												<th>Nombre</th>
												<th>Categoria</th>
												<th>Precio ($)</th>
												<th>Bodega</th>
												<th>Descripcion</th>
												<th>Imagen</th>
												<th>Estado</th>
												<th>Acción</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td>Datos</td>
												<td>Random</td>
												<td>No</td>
												<td>Hay</td>
												<td>Base</td>
												<td>De</td>
												<td>Datos</td>
												<td>
													<a href="#modal-editar" class="waves-effect waves-blue tooltipped modal-trigger" data-tooltip="Editar">
														<i class="material-icons blue-text">edit</i>
													</a>
													<a href="#modal-eliminar" class="waves-effect waves-orange tooltipped modal-trigger" data-tooltip="Eliminar">
														<i class="material-icons red-text">delete</i>
													</a>
												</td>
											</tr>
											<tr>
												<td>Alan</td>
												<td>Jellybean</td>
												<td>$3.76</td>
												<td>Alan</td>
												<td>Alan</td>
												<td>Alan</td>
												<td>Alan</td>
												<td>
													<a href="#modal-editar" class="waves-effect waves-blue tooltipped modal-trigger" data-tooltip="Editar">
														<i class="material-icons blue-text">edit</i>
													</a>
													<a href="#modal-eliminar" class="waves-effect waves-orange tooltipped modal-trigger" data-tooltip="Eliminar">
														<i class="material-icons red-text">delete</i>
													</a>
												</td>
											</tr>
											<tr>
												<td>Jonathan</td>
												<td>Lollipop</td>
												<td>$7.00</td>
												<td>Jonathan</td>
												<td>Alan</td>
												<td>Alan</td>
												<td>Alan</td>
												<td>
													<a href="#modal-editar" class="waves-effect waves-blue tooltipped modal-trigger" data-tooltip="Editar">
														<i class="material-icons blue-text">edit</i>
													</a>
													<a href="#modal-eliminar" class="waves-effect waves-orange tooltipped modal-trigger" data-tooltip="Eliminar">
														<i class="material-icons red-text">delete</i>
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<!-- modal para agregar -->

						<!-- Modal Structure -->
						<div id="modal-agregar" class="modal">
							<div class="modal-content">
								<h4 class="center-align">Agregar Producto</h4>
								<div class="row">
									<div class="input-field col s12 m6">
										<i class="material-icons prefix">cake</i>
										<input type="text" id="autocomplete-input" class="validate" />
										<label for="autocomplete-input">Nombre</label>
									</div>
									<div class="input-field col s12 m6">
										<i class="material-icons prefix">attach_money</i>
										<input type="text" id="autocomplete-input" class="validate" />
										<label for="autocomplete-input">Precio</label>
									</div>
									<div class="input-field col s12 m6">
										<i class="material-icons prefix">assignment</i>
										<input type="text" id="autocomplete-input" class="validate" />
										<label for="autocomplete-input">Descripcion</label>
									</div>
									<div class="input-field col s12 m6">
										<select>
											<option value="" disabled selected>Seleccione una opcion</option>
											<option value="1">Pan Frances</option>
											<option value="2">Pan dulce</option>
											<option value="3">Menudos</option>
											<option value="4">Postres</option>
											<option value="">Bebidas</option>
										</select>
										<label>Seleccione Categoria</label>
									</div>

								</div>
							</div>
							<div class="row center-align">
								<a href="#" class="modal-close btn waves-effect red tooltipped " data-tooltip="Cancelar">
									<i class="material-icons">cancel</i>
								</a>
								<button href="#modal-exito" type="submit" class="modal-close btn waves-effect green tooltipped modal-trigger" data-tooltip="Crear">
									<i class="material-icons">save</i>
								</button>
							</div>
						</div>

						<!-- Modal Structure -->
						<div id="modal-editar" class="modal">
							<div class="modal-content">
								<h4 class="center-align">Editar Producto</h4>
								<div class="row">
									<div class="input-field col s12 m6">
										<i class="material-icons prefix">cake</i>
										<input type="text" id="autocomplete-input" class="validate" />
										<label for="autocomplete-input">Nombre</label>
									</div>
									<div class="input-field col s12 m6">
										<i class="material-icons prefix">attach_money</i>
										<input type="text" id="autocomplete-input" class="validate" />
										<label for="autocomplete-input">Precio</label>
									</div>
									<div class="input-field col s12 m6">
										<i class="material-icons prefix">assignment</i>
										<input type="text" id="autocomplete-input" class="validate" />
										<label for="autocomplete-input">Descripcion</label>
									</div>
									<div class="input-field col s12 m6">
										<i class="material-icons prefix">book</i>
										<select id="create_categoria" name="create_categoria">
											<option value="" disabled selected>Choose your option</option>
											<option value="1">Option 1</option>
											<option value="2">Option 2</option>
											<option value="3">Option 3</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row center-align">
								<a href="#" class="modal-close btn waves-effect red tooltipped " data-tooltip="Cancelar">
									<i class="material-icons">cancel</i>
								</a>
								<button href="#modal-exito" type="submit" class="modal-close btn waves-effect green tooltipped modal-trigger" data-tooltip="Crear">
									<i class="material-icons">save</i>
								</button>
							</div>
						</div>

						<!-- Modal Structure -->
						<div id="modal-eliminar" class="modal">
							<div class="modal-content center-align">
								<i class="large material-icons orange-text">info_outline</i>
								<h4>Advertencia</h4>
								<p>¿Desea eliminar el producto?</p>
							</div>
							<div class="modal-footer">
								<a href="#!" class="modal-close waves-effect waves-red red btn">Cancelar</a>
								<a href="#modal-exito" class="modal-close waves-effect waves-green btn modal-trigger">Eliminar</a>
							</div>
						</div>

						<!-- Modal Structure -->
						<div id="modal-exito" class="modal">
							<div class="modal-content center-align">
								<i class="large material-icons green-text">check_circle_outline</i>
								<h4>Exito</h4>
								<p>Acción exitosa</p>
							</div>
							<div class="modal-footer">
								<a href="#!" class="modal-close waves-effect waves-green btn">Aceptar</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="test-swipe-3" class="col s12">
				<!-- utilice autocomplete para buscar -->
				<div class="row">
					<div class="col s12">
						<h3 class="center-align grey-text">Administrar Categoria</h3>
						<!-- autocomplete para buscar -->
						<div class="input-field col s6 m6">
							<i class="material-icons prefix">search</i>
							<!-- el search de la izquierda muestra el icono que quires que se vea -->
							<input type="text" id="autocomplete-input" class="autocomplete" />
							<label for="autocomplete-input">Buscar</label>
						</div>
						<div class="input-field col s2 m2">
							<button type="submit" class="btn waves-effect btn-floating indigo tooltipped" data-tooltip="Buscar">
								<i class="material-icons">check</i>
							</button>
							<!-- el check circle es lo mismo q el comentario de arriba -->
						</div>

						<!-- Botón para abrir ventana de agregar -->
						<div class="input-field center-align col s2 m2">
							<!-- Modal Trigger -->
							<a href="#modal-agregar" class="btn waves-effect btn-floating green tooltipped modal-trigger" data-tooltip="Agregar">
								<i class="material-icons">add</i>
							</a>
						</div>

						<!-- se crea la tabla q mostrara los registros -->
						<div class="col s12">
							<div class="card white darken-1">
								<div class="card-content black-text">
									<table class="centered striped responsive-table">
										<thead>
											<tr>
												<th>Nombre</th>
												<th>Descripción</th>
												<th>Acción</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td>No</td>
												<td>DataBase</td>
												<td>
													<a href="#modal-editar" class="waves-effect waves-blue tooltipped modal-trigger" data-tooltip="Editar">
														<i class="material-icons blue-text">edit</i>
													</a>
													<a href="#modal-eliminar" class="waves-effect waves-orange tooltipped modal-trigger" data-tooltip="Eliminar">
														<i class="material-icons red-text">delete</i>
													</a>
												</td>
											</tr>
											<tr>
												<td>Alan</td>
												<td>Jellybean</td>
												<td>
													<a href="#modal-editar" class="waves-effect waves-blue tooltipped modal-trigger" data-tooltip="Editar">
														<i class="material-icons blue-text">edit</i>
													</a>
													<a href="#modal-eliminar" class="waves-effect waves-orange tooltipped modal-trigger" data-tooltip="Eliminar">
														<i class="material-icons red-text">delete</i>
													</a>
												</td>
											</tr>
											<tr>
												<td>Jonathan</td>
												<td>Lollipop</td>
												<td>
													<a href="#modal-editar" class="waves-effect waves-blue tooltipped modal-trigger" data-tooltip="Editar">
														<i class="material-icons blue-text">edit</i>
													</a>
													<a href="#modal-eliminar" class="waves-effect waves-orange tooltipped modal-trigger" data-tooltip="Eliminar">
														<i class="material-icons red-text">delete</i>
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<!-- modal para agregar -->

						<!-- Modal Structure -->
						<div id="modal-agregar" class="modal">
							<div class="modal-content">
								<h4 class="center-align">Agregar Producto</h4>
								<div class="row">
									<div class="input-field col s12 m6">
										<i class="material-icons prefix">cake</i>
										<input type="text" id="autocomplete-input" class="validate" />
										<label for="autocomplete-input">Nombre</label>
									</div>
									<div class="input-field col s12 m6">
										<i class="material-icons prefix">attach_money</i>
										<input type="text" id="autocomplete-input" class="validate" />
										<label for="autocomplete-input">Precio</label>
									</div>
									<div class="input-field col s12 m6">
										<i class="material-icons prefix">assignment</i>
										<input type="text" id="autocomplete-input" class="validate" />
										<label for="autocomplete-input">Descripción</label>
									</div>
									<div class="input-field col s12 m6">
										<select>
											<option value="" disabled selected>Seleccione una opción</option>
											<option value="1">Pan Frances</option>
											<option value="2">Pan dulce</option>
											<option value="3">Menudos</option>
											<option value="4">Postres</option>
											<option value="">Bebidas</option>
										</select>
										<label>Seleccione Categoria</label>
									</div>

								</div>
							</div>
							<div class="row center-align">
								<a href="#" class="modal-close btn waves-effect red tooltipped " data-tooltip="Cancelar">
									<i class="material-icons">cancel</i>
								</a>
								<button href="#modal-exito" type="submit" class="modal-close btn waves-effect green tooltipped modal-trigger" data-tooltip="Crear">
									<i class="material-icons">save</i>
								</button>
							</div>
						</div>

						<!-- Modal Structure -->
						<div id="modal-editar" class="modal">
							<div class="modal-content">
								<h4 class="center-align">Editar Producto</h4>
								<div class="row">
									<div class="input-field col s12 m6">
										<i class="material-icons prefix">cake</i>
										<input type="text" id="autocomplete-input" class="validate" />
										<label for="autocomplete-input">Nombre</label>
									</div>
									<div class="input-field col s12 m6">
										<i class="material-icons prefix">attach_money</i>
										<input type="text" id="autocomplete-input" class="validate" />
										<label for="autocomplete-input">Precio</label>
									</div>
									<div class="input-field col s12 m6">
										<i class="material-icons prefix">assignment</i>
										<input type="text" id="autocomplete-input" class="validate" />
										<label for="autocomplete-input">Descripción</label>
									</div>
									<div class="input-field col s12 m6">
										<i class="material-icons prefix">book</i>
										<select id="create_categoria" name="create_categoria">
											<option value="" disabled selected>Choose your option</option>
											<option value="1">Option 1</option>
											<option value="2">Option 2</option>
											<option value="3">Option 3</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row center-align">
								<a href="#" class="modal-close btn waves-effect red tooltipped " data-tooltip="Cancelar">
									<i class="material-icons">cancel</i>
								</a>
								<button href="#modal-exito" type="submit" class="modal-close btn waves-effect green tooltipped modal-trigger" data-tooltip="Crear">
									<i class="material-icons">save</i>
								</button>
							</div>
						</div>

						<!-- Modal Structure -->
						<div id="modal-eliminar" class="modal">
							<div class="modal-content center-align">
								<i class="large material-icons orange-text">info_outline</i>
								<h4>Advertencia</h4>
								<p>¿Desea eliminar el producto?</p>
							</div>
							<div class="modal-footer">
								<a href="#!" class="modal-close waves-effect waves-red red btn">Cancelar</a>
								<a href="#modal-exito" class="modal-close waves-effect waves-green btn modal-trigger">Eliminar</a>
							</div>
						</div>

						<!-- Modal Structure -->
						<div id="modal-exito" class="modal">
							<div class="modal-content center-align">
								<i class="large material-icons green-text">check_circle_outline</i>
								<h4>Exito</h4>
								<p>Acción exitosa</p>
							</div>
							<div class="modal-footer">
								<a href="#!" class="modal-close waves-effect waves-green btn">Aceptar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript" src="../../libraries/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../../resources/js/materialize.min.js"></script>
	<script type="text/javascript" src="../../resources/js/standard.js"></script>
</body>

</html>