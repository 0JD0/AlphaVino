<?php
    class Productos
    {
        public function basex() {
            include('../helpers/database.php');
            $app = new Conexion(); 
            $conex = $app->connec();
            return $conex;
        }

        public function leerP() {
            
            $app2 = new Productos();
            $conn = $app2->basex();
            $sql= "SELECT id_vino as 'id', nombre_vino as 'vino', tipo_vino.nombre  as 'tipo', precio_vino as 'precio', descripcion_vino as 'descripcion', imagen_vino as 'img', bodega.marca_bodega as 'marca' FROM tipo_vino INNER JOIN vino on tipo_vino.id_tipo = vino.id_tipo INNER JOIN bodega on vino.id_bodega = bodega.id_bodega";
            $result = $conn->query($sql);
            $pro = array();
            while ($row = $result->fetch_assoc()) {
                array_push($pro, $row);
            }
            $res['vinos'] = $pro; 
            header('Content-type: application/json');
            echo json_encode($res);
        }
        public function leerC() {
            
            $app2 = new Productos();
            $conn = $app2->basex();
            $sql= "SELECT id_tipo as 'id', nombre, descripcion FROM tipo_vino";
            $result = $conn->query($sql);
            $pro = array();
            while ($row = $result->fetch_assoc()) {
                array_push($pro, $row);
            }
            $res['categoria'] = $pro; 
            header('Content-type: application/json');
            echo json_encode($res);
        }
        public function leerM() {
            
            $app2 = new Productos();
            $conn = $app2->basex();
            $sql= "SELECT id_bodega as 'id', marca_bodega as 'nombre', pais_bodega as 'pais' FROM bodega";
            $result = $conn->query($sql);
            $pro = array();
            while ($row = $result->fetch_assoc()) {
                array_push($pro, $row);
            }
            $res['bodega'] = $pro; 
            header('Content-type: application/json');
            echo json_encode($res);
        }
        //Ingresar pedido
        
        public function pedido($C) {
            $app2 = new Productos();
            $conn = $app2->basex();
            $sql = "insert into venta values(null,'".$_SESSION['idcliente']."',NOW())";
            $ingre = array();
            $result = $conn->query($sql);
            if ( $result ) {
                $id = $app2->ultimo($conn);
                for ($i=0; $i < count($C); $i++) {
                    $app2->detallePedido($conn,$id,$C[$i]['id'],$C[$i]['cantidad'], $C[$i]['precio']);
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
            $sql = "insert into detalle_venta values(null,'".$p0."','".$p1."','".$p2."','".$p3."', NOW())";
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