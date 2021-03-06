<?php
require_once('../../helpers/database.php');
require_once('../../helpers/validator.php');
require_once('../../models/usuarios.php');

//Se comprueba si existe una petición del sitio web y la acción a realizar, de lo contrario se muestra una página de error
if (isset($_GET['action'])) {
    session_start();
    $usuario = new Usuarios;
    $result = array('status' => 0,'message' => null, 'exception' => null);
    //Se verifica si existe una sesión iniciada como administrador para realizar las operaciones correspondientes
    if (isset($_SESSION['id_empleado'])) {
        switch ($_GET['action']) {
            case 'logout':
                if (session_destroy()) {
                    header('location: ../../views/dashboard/');
                } else {
                    header('location: ../../views/dashboard/home.php');
                }
                break;
            case 'readProfile':
                if ($usuario->setId($_SESSION['id_empleado'])) {
                    if ($result['dataset'] = $usuario->getUsuario()) {
                        $result['status'] = 1;
                    } else {
                        $result['exception'] = 'Usuario inexistente';
                    }
                } else {
                    $result['exception'] = 'Usuario incorrecto';
                }
                break;
            case 'editProfile':
                if ($usuario->setId($_SESSION['id_empleado'])) {
                    if ($usuario->getUsuario()) {
                        $_POST = $usuario->validateForm($_POST);
                        if ($usuario->setNombres($_POST['profile_nombres'])) {
                            if ($usuario->setApellidos($_POST['profile_apellidos'])) {
                                if ($usuario->setTelefono($_POST['profile_telefono'])) {
                                if ($usuario->setCorreo($_POST['profile_correo'])) {
                                    if ($usuario->setAlias($_POST['profile_alias'])) {
                                        if ($usuario->updateUsuario()) {
                                            $_SESSION['alias_empleado'] = $_POST['profile_alias'];
                                            $result['status'] = 1;
                                        } else {
                                            $result['exception'] = 'Operación fallida';
                                        }
                                    } else {
                                        $result['exception'] = 'Alias incorrecto';
                                    }
                                } else {
                                    $result['exception'] = 'Correo incorrecto';
                                }
                            } else {
                                $result['exception'] = 'Telefono incorrectos';
                            }
                            } else {
                                $result['exception'] = 'Apellidos incorrectos';
                            }
                        } else {
                            $result['exception'] = 'Nombres incorrectos';
                        }
                    } else {
                        $result['exception'] = 'Usuario inexistente';
                    }
                } else {
                    $result['exception'] = 'Usuario incorrecto';
                }
                break;
            case 'password':
                if ($usuario->setId($_SESSION['id_empleado'])) {
                    $_POST = $usuario->validateForm($_POST);
                    if ($_POST['clave_actual_1'] == $_POST['clave_actual_2']) {
                        if ($usuario->setClave($_POST['clave_actual_1'])) {
                            if ($usuario->checkPassword()) {
                                if ($_POST['clave_nueva_1'] == $_POST['clave_nueva_2']) {
                                    if ($usuario->setClave($_POST['clave_nueva_1'])) {
                                        if ($usuario->changePassword()) {
                                            $result['status'] = 1;
                                        } else {
                                            $result['exception'] = 'Operación fallida';
                                        }
                                    } else {
                                        $result['exception'] = 'Clave nueva menor a 6 caracteres';
                                    }
                                } else {
                                    $result['exception'] = 'Claves nuevas diferentes';
                                }
                            } else {
                                $result['exception'] = 'Clave actual incorrecta';
                            }
                        } else {
                            $result['exception'] = 'Clave actual menor a 6 caracteres';
                        }
                    } else {
                        $result['exception'] = 'Claves actuales diferentes';
                    }
                } else {
                    $result['exception'] = 'Usuario incorrecto';
                }
                break;
            case 'read':
                if ($result['dataset'] = $usuario->readUsuarios()) {
                    $result['status'] = 1;
                } else {
                    $result['exception'] = 'No hay usuarios registrados';
                }
                break;
            case 'search':
                $_POST = $usuario->validateForm($_POST);
                if ($_POST['busqueda'] != '') {
                    if ($result['dataset'] = $usuario->searchUsuarios($_POST['busqueda'])) {
                        $result['status'] = 1;
                    } else {
                        $result['exception'] = 'No hay coincidencias';
                    }
                } else {
                    $result['exception'] = 'Ingrese un valor para buscar';
                }
                break;
            case 'create':
                $_POST = $usuario->validateForm($_POST);
                if ($usuario->setNombres($_POST['create_nombres'])) {
                    if ($usuario->setApellidos($_POST['create_apellidos'])) {
                        if ($usuario->setTelefono($_POST['create_telefono'])) {
                        if ($usuario->setCorreo($_POST['create_correo'])) {
                            if ($usuario->setAlias($_POST['create_alias'])) {
                                if ($_POST['create_clave1'] == $_POST['create_clave2']) {
                                    if ($usuario->setClave($_POST['create_clave1'])) {
                                        if (is_uploaded_file($_FILES['create_archivo']['tmp_name'])) {
                                            if ($usuario->setImagen($_FILES['create_archivo'], null)) {    
                                        if ($usuario->createUsuario()) {
                                            if ($usuario->saveFile($_FILES['create_archivo'], $usuario->getRuta(), $usuario->getImagen())) {
                                            $result['status'] = 1;
                                        } else {
                                            $result['status'] = 2;
                                            $result['exception'] = 'No se guardó el archivo';
                                        }
                                        } else {
                                            $result['exception'] = 'Operación fallida';
                                        }
                                    } else {
                                        $result['exception'] = $usuario->getImageError();
                                    }
                                } else {
                                    $result['exception'] = 'Seleccione una imagen';
                                }
                                    } else {
                                        $result['exception'] = 'Clave menor a 6 caracteres';
                                    }
                                } else {
                                    $result['exception'] = 'Claves diferentes';
                                }
                            } else {
                                $result['exception'] = 'Alias incorrecto';
                            }
                        } else {
                            $result['exception'] = 'Correo incorrecto';
                        }
                    } else {
                        $result['exception'] = 'Telefono incorrectos';
                    }
                } else {
                    $result['exception'] = 'Apellidos incorrectos' ;
                }
                } else {
                    $result['exception'] = 'Nombres incorrectos';
                }
                break;
            case 'get':
                if ($usuario->setId($_POST['id_empleado'])) {
                    if ($result['dataset'] = $usuario->getUsuario()) {
                        $result['status'] = 1;
                    } else {
                        $result['exception'] = 'Usuario inexistente';
                    }
                } else {
                    $result['exception'] = 'Usuario incorrecto';
                }
                break;
            case 'update':
                $_POST = $usuario->validateForm($_POST);
                if ($usuario->setId($_POST['id_empleado'])) {
                    if ($usuario->getUsuario()) {
                        if ($usuario->setNombres($_POST['update_nombres'])) {
                            if ($usuario->setApellidos($_POST['update_apellidos'])) {
                                if ($usuario->setTelefono($_POST['update_telefono'])) {
                                if ($usuario->setCorreo($_POST['update_correo'])) {
                                    if ($usuario->setAlias($_POST['update_alias'])) {
                                        if (is_uploaded_file($_FILES['update_archivo']['tmp_name'])) {
                                            if ($usuario->setImagen($_FILES['update_archivo'], $_POST['imagen_usuario'])) {
                                                $archivo = true;
                                            } else {
                                                $result['exception'] = $usuario->getImageError();
                                                $archivo = false;
                                            }
                                        } else {
                                            if ($usuario->setImagen(null, $_POST['imagen_usuario'])) {
                                                $result['exception'] = 'No se subió ningún archivo';
                                            } else {
                                                $result['exception'] = $usuario->getImageError();
                                            }
                                            $archivo = false;
                                        }
                                        if ($usuario->updateUsuario()) {
                                            if ($archivo) {
                                                if ($usuario->saveFile($_FILES['update_archivo'], $usuario->getRuta(), $usuario->getImagen())) {
                                                    $result['status'] = 1;
                                                } else {
                                                    $result['status'] = 2;
                                                    $result['exception'] = 'No se guardó el archivo';
                                                }
                                            } else {
                                                $result['status'] = 3;
                                            }
                                        } else {
                                            $result['exception'] = 'Operación fallida';
                                        }
                                    } else {
                                        $result['exception'] = 'Alias incorrecto';
                                    }
                                } else {
                                    $result['exception'] = 'Correo incorrecto';
                                }
                            } else {
                                $result['exception'] = 'telefono incorrecto';
                            }
                            } else {
                                $result['exception'] = 'Apellidos incorrectos';
                            }
                        } else {
                            $result['exception'] = 'Nombres incorrectos';
                        }
                    } else {
                        $result['exception'] = 'Usuario inexistente';
                    }
                } else {
                    $result['exception'] = 'Usuario incorrecto';
                }
                break;case 'delete':
                if ($_POST['identifier'] != $_SESSION['id_empleado']) {
                    if ($usuario->setId($_POST['identifier'])) {
                        if ($usuario->getUsuario()) {
                            if ($usuario->deleteUsuario()) {
                                $result['status'] = 1;
                                $result['message'] = 'Usuario eliminado correctamente';
                            } else {
                                $result['exception'] = 'Operación fallida';
                            }
                        } else {
                            $result['exception'] = 'Usuario inexistente';
                        }
                    } else {
                        $result['exception'] = 'Usuario incorrecto';
                    }
                } else {
                    $result['exception'] = 'No se puede eliminar a sí mismo';
                }
                break;
            default:
                exit('Acción no disponible log');
        
        }
    } else if ($_GET['action']) {
        switch ($_GET['action']) {
            case 'read':
                if ($usuario->readUsuarios()) {
                    $result['status'] = 1;
                    $result['message'] = 'Existe al menos un usuario registrado';
                } else {
                    $result['status'] = 2;
                    $result['message'] = 'No existen usuarios registrados';
                }
                break;
                case 'register':
                $_POST = $usuario->validateForm($_POST);
                if ($usuario->setNombres($_POST['nombres'])) {
                    if ($usuario->setApellidos($_POST['apellidos'])){
                        if($usuario->setTelefono($_POST['telefono'])){
                            if ($usuario->setCorreo($_POST['correo'])) {
                                    if ($usuario->setAlias($_POST['alias'])){
                                        if ($_POST['clave1'] == $_POST['clave2']) {
                                            if ($usuario->setClave($_POST['clave1'])) {
                                                if ($usuario->createUsuario()) {
                                                    $result['status'] = 1;
                                                            $result['message'] = 'Usuario agregado correctamente';  
                                                        } else {
                                                            $result['exception'] = 'Operación fallida';
                                                        }
                                            } else {
                                                $result['exception'] = 'Clave menor a 6 caracteres';
                                            }
                                        } else {
                                            $result['exception'] = 'Claves diferentes';
                                        }
                                    } else {
                                        $result['exception'] = 'Alias incorrecto';
                                    }
                            } else {
                                $result['exception'] = 'Numero mal escrito';
                            }
                        } else {
                        $result['exception'] = 'Correo incorrecto';
                        }
                    } else {
                        $result['exception'] = 'Apellidos incorrectos';
                    }
                } else {
                    $result['exception'] = 'Nombres incorrectos';
                }
                break;
            case 'login':
                $_POST = $usuario->validateForm($_POST);
                if ($usuario->setAlias($_POST['alias'])) {
                    if ($usuario->checkAlias()) {
                        if ($usuario->setClave($_POST['clave'])) {
                            if ($usuario->checkPassword()) {
                                $_SESSION['id_empleado'] = $usuario->getId();
                                $_SESSION['alias_empleado'] = $usuario->getAlias();
                                $result['status'] = 1;
                                $result['message'] = 'Autenticación correcta';
                            } else {
                                $result['exception'] = 'Clave inexistente';
                            }
                        } else {
                            $result['exception'] = 'Clave menor a 6 caracteres';
                        }
                    } else {
                        $result['exception'] = 'Alias inexistente';
                    }
                } else {
                    $result['exception'] = 'Alias incorrecto';
                }
                break;
            default:
                exit('Acción no disponible');
        }
    } else {
        exit('Acceso no disponible');
    }
	print(json_encode($result));
} else {
	exit('Recurso denegado');
}
?>