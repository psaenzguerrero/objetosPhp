<?php

class articulo{
    private $nombre;
    private $precio;

    public function __construct($pNombre,$pPrecio){
        $this->nombre = $pNombre;
        $this->precio = $pPrecio;
    }
    public function set_nom($pNombre){
        $this->nombre =$pNombre;
    }
    public function setPrecio($pPrecio){
        if (is_numeric($pPrecio)) {
            $this->precio =$pPrecio;
        }  
    }
    public function getPrecio(){
        return $this->precio;
    }

    public function __toString(){
        $str = 'Nombre:'.$this->nombre.'<br />'.'Precio: '.$this->precio.'&euro;<br />';
        return $str;
    }
}
$art = new articulo("bici", 100);
echo $art;

class articuloR extends articulo{
    private $rebaja;

    public function __construct($pNombre="",$pPrecio="",$pRebaja=""){
        $padre_tS = parent::__construct($pNombre,$pPrecio);
        $this->rebaja = $pRebaja;   
    }
    public function setRebaja($pRebaja){
        $this->rebaja = $pRebaja;
    }

    private function calcularDescuento(){
        $res = $this->rebaja*$this->getPrecio() / 100;
        return $res;
    }
    public function precioBajado(){
        $precio = $this->getPrecio();
        $descuento = $this->calcularDescuento();
        $res = $precio - $descuento;
        return $res;
    }
    public function __toString(){
        $str = parent::__toString()." ".'La rebaja es '. $this->rebaja.'%<br>'.'El descuento es '.$this->calcularDescuento().'€';
        return $str;
    }
}
$art = new articuloR("bici", 100, 20);
echo $art;
echo "<br> El precio del articulo rebajado es".$art->precioBajado()."€<br>";
?>