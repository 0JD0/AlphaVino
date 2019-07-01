<?php
    class Usuarios
    {
        public function basex() {
            include('../helpers/database.php');
            $app = new Conexion(); 
            $conex = $app->connec();
            return $conex;
        }
        public function login($correo, $contra) {
            
            $app2 = new Usuarios();
            $conn = $app2->basex();
            $sql= "SELECT contra_cliente as 'contra' FROM cliente WHERE correo_cliente = '".$correo."'";
            //echo $sql;
            $result = $conn->query($sql);
            $pro = array();
            $pro2 = array();
            $row = $result->fetch_assoc();
            if ( $row > 0 ) {
                $hash = $row["contra"];
                //echo $hash;
                if (password_verify($contra,$hash)) {
                    $sql= "SELECT id_cliente as 'id', nombre_cliente as 'nombre', apellido_cliente as 'apellido', telefono_cliente as 'telefono', correo_cliente as 'correo', fecha_nac_cliente as 'fecha' FROM cliente WHERE correo_cliente = '".$correo."'";
                    $result = $conn->query($sql);
                    $var = array('val'=>0, 'mensaje'=>'correcto');
                    array_push( $pro2,$var);
                    $pro = array();

                    while ($row = $result->fetch_assoc()) {
                        $_SESSION['idcliente'] = $row["id"];
                        array_push($pro, $row);
                    }
                }
                else {
                    $var = array('val'=>1, 'mensaje'=>'Contraseña incorrecta');
                    array_push( $pro2,$var);
                }
                //var_dump($row);
                //verificar_contra($conn, $contra)
            }
            else {
                $var = array('val'=>1, 'mensaje'=>'Correo no registrado');
                array_push( $pro2,$var);
            }
            $res['estatus'] = $pro2;
            $res['usuario'] = $pro; 
            header('Content-type: application/json');
            echo json_encode($res);
        }
        public function datos($conn,$correo){

            
        }
        public function ingresar($nombre,$apellido,$telefono,$correo,$contra,$fecha) {
            $app2 = new Usuarios();
            $conn = $app2->basex();
            $hash = password_hash($contra, PASSWORD_DEFAULT);
            $sql = "INSERT INTO cliente VALUES (null,'".$nombre."','".$apellido."','".$telefono."','".$correo."','".$hash."','".$fecha."')";
            $ingre = array();
            $result = $conn->query($sql);
            if ( $result ) {
                $var = array('val'=>0, 'mensaje'=>'Felicidades por ingresar');
                array_push( $ingre,$var);
            }
            else {
                $var = array('val'=>1, 'mensaje'=>'Hubo un error en su compra');
                array_push( $ingre,$var);
            }
            $res['error'] = $ingre;
            header( 'Content-type: application/json' );
            echo json_encode($res);
        }
        public function cambiar($nombre,$apellido,$telefono,$correo,$contra,$fecha) {
            $app2 = new Usuarios();
            $conn = $app2->basex();
            if ($contra != '') {
                $hash = password_hash($contra, PASSWORD_DEFAULT);
                $sql = "Update cliente set nombre_cliente ='".$nombre."', apellido_cliente = '".$apellido."', telefono_cliente = '".$telefono."', correo_cliente = '".$correo."', contra_cliente = '".$hash."', fecha_nac_cliente = '".$fecha."' where id_cliente = ".$_SESSION['idcliente'];
            }
            else {
                $sql = "Update cliente set nombre_cliente ='".$nombre."', apellido_cliente = '".$apellido."', telefono_cliente = '".$telefono."', correo_cliente = '".$correo."', fecha_nac_cliente = '".$fecha."' where id_cliente = ".$_SESSION['idcliente'];;
              
            }
            $ingre = array();
            $result = $conn->query($sql);
            if ( $result ) {
                $var = array('val'=>0, 'mensaje'=>'Felicidades por ingresar');
                array_push( $ingre,$var);
            }
            else {
                $var = array('val'=>1, 'mensaje'=>'Hubo un error en su compra');
                array_push( $ingre,$var);
            }
            $res['error'] = $ingre;
            header( 'Content-type: application/json' );
            echo json_encode($res);
        }
        public function leerSession() {
            
            $app2 = new Usuarios();
            $conn = $app2->basex();
            $sql= "SELECT id_cliente as 'id', nombre_cliente as 'nombre', apellido_cliente as 'apellido', telefono_cliente as 'telefono', correo_cliente as 'correo', fecha_nac_cliente as 'fecha' FROM cliente WHERE id_cliente=".$_SESSION['idcliente'];
            $result = $conn->query($sql);
            $pro = array();
            $pro2 = array();
            while ($row = $result->fetch_assoc()) {
                array_push($pro, $row);
            }
            $var = array('val'=>0, 'mensaje'=>'Bienvenido');
            array_push( $pro2,$var);
            $res['estatus'] = $pro2;
            $res['usuario'] = $pro; 
            header('Content-type: application/json');
            echo json_encode($res);
        }
        //Ingresar pedido
        
        public function pedido($idP=1,$C) {
            $app2 = new Productos();
            $conn = $app2->basex();
            $sql = "insert into venta values(null,'".$idP."',NOW())";
            $ingre = array();
            $result = $conn->query($sql);
            if ( $result ) {
                $id = $app2->ultimo($conn);
                for ($i=0; $i < count($C); $i++) {
                    $app2->detallePedido($conn,$id,$C[$i]['id'],$C[$i]['cantidad'], $C[$i]['total']);
                }
                $var = array('val'=>0, 'mensaje'=>'Felicidades por su compra');
                array_push( $ingre,$var);
                $_SESSION['produc'] = null;
            }
            else {
                $var = array('val'=>1, 'mensaje'=>'Hubo un error en su compra');
                array_push( $ingre,$var);
            }
            $res['error'] = $ingre;
            header( 'Content-type: application/json' );
            echo json_encode($res);
        }
        public function detallePedido($conn, $p0,$p1,$p2,$p3) {
            $sql = "insert into detalle_venta values(null,'".$p0."','".$p1."','".$p2."','".$p3."')";
            $ingre = array();
            $result = $conn->query($sql);
            if ( $result ) {
            }
            else {
            }
        }
        
        public function ultimo($conn) {
            $sql= "SELECT MAX(id_venta) as 'id' FROM venta";
            $result = $conn->query($sql);
            $pro = 0;
            while ( $row = $result->fetch_object()) {
                $pro = $row->id;
            }
            return $pro;
        }
    }
?>