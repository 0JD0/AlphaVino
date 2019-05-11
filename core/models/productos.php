<?php
class Productos extends Validator
{
    //variables
    private $id = null;
    private $nombre = null;
    private $cosecha = null;
	private $descripcion = null;
	private $precio = null;
	private $imagen = null;
    private $categoria = null;
    private $bodega = null;
	private $estado = null;
    private $ruta = '../../resources/img/productos/';
    
    //métodos get y set de las variables
    public function setId($value)
    {
        if ($this->validateId($value)) {
            $this->id = $value;
            return true;
        } else {
            return false;
        }  
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNombre($value)
    {
        if ($this->validateAlphanumeric($value, 1, 50)) {
            $this->nombre = $value;
            return true;
        } else {
            return false;
        }    
    }

    public function getNombre()
    {
        return $this->nombre;
    }

}
    
?>