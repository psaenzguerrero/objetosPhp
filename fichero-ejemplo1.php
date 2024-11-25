<?php
class persona {
    public $nombre;
    public $apellidos;
    public $fecha_nac;

    public function __construct($n="",$a="",$fn="01/01/2000"){
        $this->nombre = $n;
        $this->apellidos = $a;
        $this->fecha_nac = $fn;
    }
    public function nom_completo(){
        $nom = $this->nombre." ".$this->apellidos;
        return $nom;
    }
    public function set_nom($n){
        $this->nombre =$n;
    }
    public function __toString(){
        $str = "Me llamo ".$this->nom_completo()." y naci en ".$this->fecha_nac;
        return $str;
    }
}
class animal{
    public $nombre;
    public $color;
    public $fecha;


    public function __construct($n="rudolf",$c="blanco",$f="2000/1/1"){
        $this->nombre = $n;
        $this->color = $c;
        $this->fecha = $f;
    }
    public function set_nom($n){
        $this->nombre =$n;
    }
    public function set_col($c){
        $this->color =$c;
    }
    public function set_fec($f){
        $this->fecha =$f;
    }

    public function __get($atrib){
        return $this->$atrib;
    }

    public function calcular(){
        $fec = strtotime($this->fecha);
        $dia = time();
        $edad = (((($dia - $fec)/3600)/24)/365);
        return $edad;
    }
    public function __toString(){
        $str = "Se llama ".$this->nombre." y tiene una edad de ".$this->calcular()." y es de color ".$this->color;
        return $str;
    }
    
}

class perro extends animal{
    private $raza;
    private $sexo;

    public function __construct($n="",$c="",$f="",$r="",$s=""){
        $padre_tS = parent::__construct($n,$c,$f);
        $this->raza=$r;
        $this->sexo=$s;
    }
    public function set_raz($r){
        $this->raza =$r;
    }
    public function set_sex($s){
        $this->sexo =$s;
    }

    function ladrar(){
        echo "<h2>".$this->__get("nombre").", dice guau</h2>";
    }
    function dormir(){
        echo "<h2>".$this->__get("nombre")." esta dormido</h2>";
    }
    
    public function __toString(){
        $padre_tS = parent::__toString();
        $str = " es de la raza ".$this->raza." y es del sexo ".$this->sexo;
        $str = $padre_tS.$str;
        return $str;
    }
}
class delfin extends animal{
    private $longitud;
    public function __construct($n="rudolf",$c="blanco",$f="2000/1/1",$l=""){
        $padre_tS = parent::__construct($n,$c,$f);
        $this->longitud=$l;
    }
    public function set_raz($l){
        $this->logitud =$l;
    }
    function saltar(){
        echo "<h2>".$this->__get("nombre")." esta saltando por los aires</h2>";
    }
    function comer(){
        echo "<h2>".$this->__get("nombre")." tiene  hambre</h2>";
    }
    
    public function __toString(){
        $padre_tS = parent::__toString();
        $str = " y es asi de largo ".$this->longitud;
        $str = $padre_tS.$str;
        return $str;
    }
    
}


class vehiculo{
    private $nombre;
    private $tipo;
    private $peso;

    public function __construct($n="", $t="",$p=""){
        $this->nombre = $n;
        $this ->tipo = $t;
        $this->peso = $p;
    }
    public function set_nom($n){
        $this->nombre =$n;
    }
    public function set_tip($t){
        $this->tipo =$t;
    }
    public function set_pes($p){
        $this->peso =$p;
    }

    public function __getT($t){
        return $this->$t;
    }
    public function __getP($p){
        return $this->$p;
    }

    public function elegir(){
        $texto = $this->tipo;
        $tipo="";
        if ($texto == "C") {
            $tipo = "camión";
            return $tipo;
        }
        if ($texto == "M") {
            $tipo = "moto";
            return $tipo;
        }
        if ($texto == "T") {
            $tipo = "turismo";
            return $tipo;
        }
    }
    public function pesor(){
        $cantidad = ($this->peso)/1000;
        return $cantidad;
    }
    public function __toString(){
        $str = "Se llama ".$this->nombre." es un ".$this->elegir()." y pesa unas ".$this->pesor()." toneladas";
        return $str;
    }

}
class imagen{
    private $src;
    private $border;
    private $ruta_images;

    public function __construct($sr,$ru,$bo=0){
        if (!file_exists($ru)) {
            mkdir($ru);
        }
        $this->src=$ru."/".$sr;
        $this->border=$bo;
        $this->ruta_images=$ru;
    }
    public function comprobar_ruta(){
        if (!file_exists($this->ruta_images)) {
            mkdir($this->ruta_images);
        }
    }
    public function __toString(){
        $str = "<img src=".$this->src." border=\"".$this->border."px\" />";
        return $str;
    }
}
?>