<?php
require_once './fichero.php';
if (isset($_POST["enviar"])) {
    $perro = new perro($_POST["no"],$_POST["co"],$_POST["fe"],$_POST["ra"],$_POST["se"],$_POST["qe"]);
    if ($_POST["qe"] == "ladrar") {
        $perro->ladrar();
    } else {
        $perro->dormir();
    }
    echo $perro;
}else if(isset($_POST["enviar2"])) {
    $delfin = new delfin($_POST["no"],$_POST["co"],$_POST["fe"],$_POST["lu"],$_POST["qe"]);
    if ($_POST["qe"] == "saltar") {
        $delfin->saltar();
    } else {
        $delfin->comer();
    }
    echo $delfin;
}else{
?>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="no">Nombre:</label>
            <input type="text" name="no">
            <br>
            <label for="co">Color:</label>
            <input type="text" name="co">
            <br>
            <label for="fe">Fecha:</label>
            <input type="date" name="fe">
            <br>
            <label for="ra">Raza:</label>
            <input type="text" name="ra">
            <br>
            <label for="se">Sexo:</label>
            <input type="text" name="se">
            <br>
            <label for="qe">¿que hace el perro?:</label>
            <input type="text" name="qe">
            <br>
            <input type="submit" value="Enviar" name="enviar">
        </form>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="no">Nombre:</label>
            <input type="text" name="no">
            <br>
            <label for="co">Color:</label>
            <input type="text" name="co">
            <br>
            <label for="fe">Fecha:</label>
            <input type="date" name="fe">
            <br>
            <label for="lu">Longitud:</label>
            <input type="text" name="lu">
            <br>
            <label for="qe">¿que hace el dolfin?:</label>
            <input type="text" name="qe">
            <br>
            <input type="submit" value="Enviar" name="enviar2">
        </form>
<?php
}
?>