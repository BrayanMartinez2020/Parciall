<?php

class ProductoDAO
{
    private $id;
    private $nombre;
    private $talla;
    private $precio;
    private $categoria;
    
    public function ProductoDAO($id="", $nombre="", $talla="", $precio="", $categoria="")
    {
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> talla = $talla;
        $this -> precio = $precio;
        $this -> categoria = $categoria;       
    }
   
    public function crear()
    {
        return "insert into producto (nombre, talla, precio, categoria)
                values (
                '" . $this -> nombre . "',
                '" . $this -> talla . "',
                '" . $this -> precio . "',
                '" . $this -> categoria . "',
                )";
    }   
    
    public function consultarTodos($atributo, $direccion, $filas, $pag){
        return "select idProducto, nombre, precio, cantidad, imagen, administrador_idadministrador, marca_idmarca, tipoproducto_idtipoproducto
                from producto " . 
                (($atributo != "" && $direccion != "")?"order by " . $atributo . " " . $direccion:"") . 
                " limit " . (($pag-1)*$filas) . ", " . $filas; 
    }    
    
}
