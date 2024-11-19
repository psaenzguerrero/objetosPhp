<?php
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
    if (isset($_POST["enviar"])) {
        $vehiculo = new vehiculo($_POST["no"],$_POST["ra"],$_POST["pe"]);
        
        $vehiculo2 = new vehiculo($_POST["nox"],$_POST["rax"],$_POST["pex"]);

        if ($vehiculo->__getT("tipo") == $vehiculo2->__getT("tipo")) {
            if ($vehiculo->__getP("peso") > $vehiculo2->__getP("peso")) {
                echo $vehiculo;
            }elseif($vehiculo->__getP("peso") == $vehiculo2->__getP("peso")) {
                echo "Los dos vehiculos son del mismo tipo y pesan lo mismo";
            }else{
                echo $vehiculo2;
            }
        } else {
            echo "Los vehiculos son de diferente tipo no se pueden comparar";
            echo "<br>";
            echo $vehiculo;
            echo "<br>";
            echo $vehiculo2;
        }
        
        
    }else{
?>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="Ve1">VEHICULO 1</label>
            <br>
            <label for="no">Nombre:</label>
            <input type="text" name="no">
            <br>
            <label for="ti">Camion:</label>
            <input type="radio" value="C" name="ra">
            <br>
            <label for="ti">Moto:</label>
            <input type="radio" value="M" name="ra">
            <br>
            <label for="ti">Turismo:</label>
            <input type="radio" value="T" name="ra">
            <br>
            <label for="pe">Peso:</label>
            <input type="number" name="pe">
            <br>
            <label for="Ve1">VEHICULO 2</label>
            <br>
            <label for="no">Nombre2:</label>
            <input type="text" name="nox">
            <br>
            <label for="ti">Camion:</label>
            <input type="radio" value="C" name="rax">
            <br>
            <label for="ti">Moto:</label>
            <input type="radio" value="M" name="rax">
            <br>
            <label for="ti">Turismo:</label>
            <input type="radio" value="T" name="rax">
            <br>
            <label for="pe">Peso2:</label>
            <input type="number" name="pex">
            <br>
            <input type="submit" value="Enviar" name="enviar">
        </form>
<?php
    }
?>