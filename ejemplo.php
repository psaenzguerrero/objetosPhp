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
    $yo = new persona("Pablo", "Saenz" );
    echo $yo;
?>