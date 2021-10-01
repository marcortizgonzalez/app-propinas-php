<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apppropinas</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="box">
<div class="header">
        <h2>Calculador de propinas</h2>
    </div>

    <form action="processes/calculo.proc.php" method="POST">
        <div class="column">        
            <input class="casilla" type="number" name="cuenta" placeholder="Total de la cuenta"></input>
        </div>
        <div class="column">
            <select class="casilla2" name="servicio" id="">
                <option value="0.3">30% Excelente</option>
                <option value="0.2">20% Bueno</option>
                <option value="0.1" selected>10% Normal</option>
                <option value="0.05">5% Mala</option>
            </select>
        </div>
        <div class="column">
            <input class="casilla3" type="number" name="personas" placeholder="¿Cuantas personas van a pagar?"></input>
        </div>
        <div class="column">
            <input class="casilla4" type="submit" name="submit" value="Calcular">
        </div>
    </form>
</div>

<?php
if(isset($_REQUEST['res'])){
    echo "<p>Total a pagar<p>";
    echo "<h3>".$_REQUEST['res']."€<h3>";
}

if(isset($_REQUEST['txt'])){
    echo "<h3>".$_REQUEST['txt']."<h3>";
}
?>
</body>
</html>