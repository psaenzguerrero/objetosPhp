<?php
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

        public function calcular(){
            $fec = strtotime($this->fecha);
            $dia = time();
            $edad = (((($dia - $fec)/3600)/24)/365);
            return $edad;
        }
        public function __toString(){
            $str = "Se llama ".$this->nombre." y tiene una edad de ".$this->calcular();
            return $str;
        }
        
    }
    
    if (isset($_POST["enviar"])) {
        $animal = new animal($_POST["no"],$_POST["co"],$_POST["fe"]);
        echo $animal;
    }else{
?>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="no">Nombre:</label>
            <input type="text" name="no">
            <br>
            <label for="no">Color:</label>
            <input type="text" name="co">
            <br>
            <label for="no">Fecha:</label>
            <input type="date" name="fe">
            <br>
            <input type="submit" value="Enviar" name="enviar">
        </form>
<?php
    }
?>