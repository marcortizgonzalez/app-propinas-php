<?php



if (isset($_POST['submit'])){
    $cuenta= $_POST['cuenta'];
    $servicio= $_POST['servicio'];
    $personas= $_POST['personas'];
    $texto="No dejes campos vacios";
    if (is_numeric($cuenta)==false) {
        header("Location:../index.php?txt=".$texto);
    } else if (is_numeric($personas)==false) {
        header("Location:../index.php?txt=".$texto);
    } else {
        $formula=$cuenta*$servicio/$personas;
        header("Location:../index.php?res=".$formula);
    }
} else {
    header("Location:../index.php");
}


