<?php
	require_once('../../core/helpers/dashboard.php');
	Dashboard::headerTemplate('Administrar productos');
?>

<section>
    <div class="container">
        <br>
        <ul id="tabs-producto" class="tabs center-align">
            <li class="tab col s3">
                <a href="#tab-inventario">Inventario</a>
            </li>
            <li class="tab col s3">
                <a href="#tab-productos" class="active">Productos</a>
            </li>
            <li class="tab col s3">
                <a href="#tab-categoria">Categoría</a>
            </li>
        </ul>

        <div id="tab-inventario" class="col s12 yellow">Inventario</div>

        <div id="tab-productos" class="col s12">
            <!-- utilice autocomplete para buscar -->
            <div class="row">
                <div class="col s12">
                    <h3 class="center-align grey-text">Administrar Productos</h3>
                    <!-- autocomplete para buscar -->
                    <div class="input-field col s6 m6">
                        <i class="material-icons prefix">search</i>
                        <!-- el search de la izquierda muestra el icono que quires que se vea -->
                        <input type="text" id="buscar" name="busqueda" class="autocomplete" />
                        <label for="buscar">Buscar</label>
                    </div>
                    <div class="input-field col s2 m2">
                        <button type="submit" class="btn waves-effect btn-floating indigo tooltipped"
                            data-tooltip="Buscar">
                            <i class="material-icons">check</i>
                        </button>
                        <!-- el check circle es lo mismo q el comentario de arriba -->
                    </div>

                    <!-- Botón para abrir ventana de agregar -->
                    <div class="input-field center-align col s2 m2">
                        <!-- Modal Trigger -->
                        <a href="#modal-create" class="btn waves-effect btn-floating green tooltipped modal-trigger"
                            data-tooltip="Crear">
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
                                            <th>Categoría</th>
                                            <th>Precio ($)</th>
                                            <th>Bodega</th>
                                            <th>Cosecha</th>
                                            <th>Descripción</th>
                                            <th>Imagen</th>
                                            <th>Estado</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>

                                    <tbody id="tbody-read">
                                        <tr>
                                            <td>Datos</td>
                                            <td>Random</td>
                                            <td>Aqui</td>
                                            <td>No</td>
                                            <td>Hay</td>
                                            <td>Base</td>
                                            <td>De</td>
                                            <td>Datos</td>
                                            <td>
                                                <a href="#modal-update"
                                                    class="waves-effect waves-blue tooltipped modal-trigger"
                                                    data-tooltip="Editar">
                                                    <i class="material-icons blue-text">edit</i>
                                                </a>
                                                <a href="#modal-eliminar"
                                                    class="waves-effect waves-orange tooltipped modal-trigger"
                                                    data-tooltip="Eliminar">
                                                    <i class="material-icons red-text">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- modal para crear productos -->
                    <div id="modal-create" class="modal">
                        <div class="modal-content">
                            <h4 class="center-align">Crear Producto</h4>
                            <form method="post" id="form-create" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <i class="material-icons prefix">person</i>
                                        <input type="text" id="create_nombre_producto" name="create_nombre_producto"
                                            class="validate" required />
                                        <label for="create_nombre_producto">Nombre</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <i class="material-icons prefix">category</i>
                                        <select id="create_categoria_producto" name="create_categoria_producto">
                                        </select>
                                        <label>Categoria</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <i class="material-icons prefix">attach_money</i>
                                        <input type="number" id="create_precio_producto" name="create_precio_producto"
                                            class="validate" max="999.99" min="0.01" step="any" required />
                                        <label for="create_precio_producto">Precio ($)</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <i class="material-icons prefix">history</i>
                                        <input type="number" id="create_cosecha_producto" name="create_cosecha_producto"
                                            class="validate" required />
                                        <label for="create_cosecha_producto">Cosecha</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <i class="material-icons prefix">local_shipping</i>
                                        <select id="create_bodega_producto" name="create_bodega_producto">
                                        </select>
                                        <label>Bodega</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <i class="material-icons prefix">assignment</i>
                                        <input type="text" id="create_descripcion_producto"
                                            name="create_descripcion_producto" class="validate" required />
                                        <label for="create_descripcion_producto">Descripcion</label>
                                    </div>
                                    <div class="file-field input-field col s12 m6">
                                        <div class="btn waves-effect">
                                            <span><i class="material-icons">image</i></span>
                                            <input id="create_image_producto" type="file" name="create_image_producto"
                                                required />
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input type="text" class="file-path validate"
                                                placeholder="Seleccione una imagen de 500x500" />
                                        </div>
                                    </div>
                                    <div class="col s12 m6">
                                        <p>
                                            <div class="switch">
                                                <span>Estado:</span>
                                                <label>
                                                    <i class="material-icons">visibility_off</i>
                                                    <input id="create_estado_producto" type="checkbox"
                                                        name="create_estado_producto" checked />
                                                    <span class="lever"></span>
                                                    <i class="material-icons">visibility</i>
                                                </label>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="row center-align">
                            <a href="#" class="modal-close btn waves-effect red tooltipped " data-tooltip="Cancelar">
                                <i class="material-icons">cancel</i>
                            </a>
                            <button href="#modal-exito" type="submit"
                                class="modal-close btn waves-effect green tooltipped modal-trigger"
                                data-tooltip="Crear">
                                <i class="material-icons">save</i>
                            </button>
                        </div>
                    </div>

                    <!-- Modal Structure -->
                    <div id="modal-update" class="modal">
                        <div class="modal-content">
                            <h4 class="center-align">Editar Producto</h4>
                            <form method="post" id="form-update" enctype="multipart/form-data">
                                <input type="hidden" id="id_producto" name="id_producto" />
                                <input type="hidden" id="imagen_producto" name="imagen_producto" />
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <i class="material-icons prefix">person</i>
                                        <input type="text" id="update_nombre_producto" name="update_nombre_producto"
                                            class="validate" required />
                                        <label for="update_nombre_producto">Nombre</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <i class="material-icons prefix">category</i>
                                        <select id="update_categoria_producto" name="update_categoria_producto">
                                        </select>
                                        <label>Categoria</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <i class="material-icons prefix">attach_money</i>
                                        <input type="number" id="update_precio_producto" name="update_precio_producto"
                                            class="validate" max="999.99" min="0.01" step="any" required />
                                        <label for="update_precio_producto">Precio ($)</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <i class="material-icons prefix">history</i>
                                        <input type="number" id="update_cosecha_producto" name="update_cosecha_producto"
                                            class="validate" required />
                                        <label for="update_cosecha_producto">Cosecha</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <i class="material-icons prefix">local_shipping</i>
                                        <select id="update_bodega_producto" name="update_bodega_producto">
                                        </select>
                                        <label>Bodega</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <i class="material-icons prefix">assignment</i>
                                        <input type="text" id="update_descripcion_producto"
                                            name="update_descripcion_producto" class="validate" required />
                                        <label for="update_descripcion_producto">Descripcion</label>
                                    </div>
                                    <div class="file-field input-field col s12 m6">
                                        <div class="btn waves-effect">
                                            <span><i class="material-icons">image</i></span>
                                            <input id="update_image_producto" type="file" name="update_image_producto"
                                                required />
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input type="text" class="file-path validate"
                                                placeholder="Seleccione una imagen de 500x500" />
                                        </div>
                                    </div>
                                    <div class="col s12 m6">
                                        <p>
                                            <div class="switch">
                                                <span>Estado:</span>
                                                <label>
                                                    <i class="material-icons">visibility_off</i>
                                                    <input id="update_estado_producto" type="checkbox"
                                                        name="update_estado_producto" checked />
                                                    <span class="lever"></span>
                                                    <i class="material-icons">visibility</i>
                                                </label>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="row center-align">
                            <a href="#" class="modal-close btn waves-effect red tooltipped " data-tooltip="Cancelar">
                                <i class="material-icons">cancel</i>
                            </a>
                            <button href="#modal-exito" type="submit"
                                class="modal-close btn waves-effect green tooltipped modal-trigger"
                                data-tooltip="Crear">
                                <i class="material-icons">save</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="tab-categoria" class="col s12">
            <!-- utilice autocomplete para buscar -->
            <div class="row">
                <div class="col s12">
                    <h3 class="center-align grey-text">Administrar Categoria</h3>
                    <!-- autocomplete para búscar -->
                    <div class="input-field col s6 m6">
                        <i class="material-icons prefix">search</i>
                        <!-- el search de la izquierda muetra el icono que quires que se vea -->
                        <input type="text" id="autocomplete-input" class="autocomplete" />
                        <label for="autocomplete-input">Buscar</label>
                    </div>
                    <div class="input-field col s2 m2">
                        <button type="submit" class="btn waves-effect btn-floating indigo tooltipped"
                            data-tooltip="Buscar">
                            <i class="material-icons">check</i>
                        </button>
                        <!-- el check circle es lo mismo q el comentario de arriba -->
                    </div>

                    <!-- Botón para abrir ventana de agregar -->
                    <div class="input-field center-align col s2 m2">
                        <!-- Modal Trigger -->
                        <a href="#modal-agregar" class="btn waves-effect btn-floating green tooltipped modal-trigger"
                            data-tooltip="Agregar">
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
                                            <th>Descripcion</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>No</td>
                                            <td>DataBase</td>
                                            <td>
                                                <a href="#modal-editar"
                                                    class="waves-effect waves-blue tooltipped modal-trigger"
                                                    data-tooltip="Editar">
                                                    <i class="material-icons blue-text">edit</i>
                                                </a>
                                                <a href="#modal-eliminar"
                                                    class="waves-effect waves-orange tooltipped modal-trigger"
                                                    data-tooltip="Eliminar">
                                                    <i class="material-icons red-text">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Alan</td>
                                            <td>Jellybean</td>
                                            <td>
                                                <a href="#modal-editar"
                                                    class="waves-effect waves-blue tooltipped modal-trigger"
                                                    data-tooltip="Editar">
                                                    <i class="material-icons blue-text">edit</i>
                                                </a>
                                                <a href="#modal-eliminar"
                                                    class="waves-effect waves-orange tooltipped modal-trigger"
                                                    data-tooltip="Eliminar">
                                                    <i class="material-icons red-text">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jonathan</td>
                                            <td>Lollipop</td>
                                            <td>
                                                <a href="#modal-editar"
                                                    class="waves-effect waves-blue tooltipped modal-trigger"
                                                    data-tooltip="Editar">
                                                    <i class="material-icons blue-text">edit</i>
                                                </a>
                                                <a href="#modal-eliminar"
                                                    class="waves-effect waves-orange tooltipped modal-trigger"
                                                    data-tooltip="Eliminar">
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
                            <button href="#modal-exito" type="submit"
                                class="modal-close btn waves-effect green tooltipped modal-trigger"
                                data-tooltip="Crear">
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
                                    <select id="update_categoria" name="update_categoria">
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
                            <button href="#modal-exito" type="submit"
                                class="modal-close btn waves-effect green tooltipped modal-trigger"
                                data-tooltip="Crear">
                                <i class="material-icons">save</i>
                            </button>
                        </div>
                    </div>
                </div>
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
</section>
<?php
Dashboard::footerTemplate('productos.js');
?>