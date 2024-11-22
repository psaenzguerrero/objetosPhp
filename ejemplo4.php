<?php

// class imagen{
//     private $src;
//     private $border;
//     private $ruta_images;

//     public function __construct($sr,$ru,$bo=0){
//         if (!file_exists($ru)) {
//             mkdir($ru);
//         }
//         $this->src=$ru."/".$sr;
//         $this->border=$bo;
//         $this->ruta_images=$ru;
//     }
//     public function comprobar_ruta(){
//         if (!file_exists($this->ruta_images)) {
//             mkdir($this->ruta_images);
//         }
//     }
//     public function __toString(){
//         $str = "<img src=".$this->src." border=\"".$this->border."px\" />";
//         return $str;
//     }
// }

require_once './fichero.php';

if (isset($_POST["enviar"])) {
    $imagex = new imagen($_POST["archivo"],$_POST["carpe"],$_POST["borde"]); 
    $imagex;
    echo $imagex;
}else{
    
    $carpetas = scandir("./");
    $archivos = scandir("./img");    
        if (isset($_POST["enviar2"])) {
            $archivos = scandir($_POST["carpe"]); 
            echo '
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="carpe" value="'.$_POST["carpe"].'" hidden>
                <select name="archivo" id="">';

                    foreach ($archivos as $archivo) {
                        echo "<option value=\"$archivo\">$archivo</option>";
                    }
            echo '
                </select>
                <label for="borde">Introduce el tamaño</label>
                <input type="number" name="borde">
                <input type="submit" value="Enviar" name="enviar">
            </form>
            ';

        }else{
            echo '
            <form action="" method="post" enctype="multipart/form-data">
                <select name="carpe" id="">';
                    foreach ($carpetas as $carpe) {
                        echo "<option value=\"$carpe\">$carpe</option>";
                    }  
            echo '
                </select>
                <input type="submit" value="Enviar2" name="enviar2">
                </form>
            ';  
        }
}
?>