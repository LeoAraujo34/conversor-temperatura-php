<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperatura</title>
    <link rel="stylesheet" href="conver.css">
</head>
<body>
    <div id="home"> 
        <h1 align="center">Conversor de Temperatura</h1>
        <form method="POST">
    <fieldset>
        <label>Temperatura:</label>
        <input type="number" step="any" name="temperatura" required><br><br>
        <label>De:</label>
        <select name="origem" required>
        <option value="C">Celsius</option>
        <option value="F">Fahrenheit</option>
        <option value="K">Kelvin</option>
        </select><br><br>
        <label>Para:</label>
        <select name="destino" required>
        <option value="C">Celsius</option>
        <option value="F">Fahrenheit</option>
        <option value="K">Kelvin</option>
        </select><br><br>
    <button type="submit" id="btn" >Converter</button>
    </fieldset>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$temperatura = floatval($_POST["temperatura"]);
$origem = $_POST["origem"];
$destino = $_POST["destino"];

$resultado = $temperatura;

if ($origem != $destino){
switch ($origem . $destino) {
case "CF":
$resultado = ($temperatura * 9/5) + 32;
break;
case "CK":
$resultado = $temperatura + 273.15;
break;
case "FC":
$resultado = ($temperatura - 32) * 5/9;
break;
case "FK":
$resultado = ($temperatura - 32) * 5/9 + 273.15;
break;
case "KC":
$resultado = $temperatura - 273.15;
break;
case "KF":
$resultado = ($temperatura - 273.15) * 9/5 + 32;
break;
}
}
echo "<p class='temp'>";
echo number_format($temperatura,2,",",".") . "°$origem = ";
echo number_format($resultado,2,",",".") . "°$destino";
echo "</p>";
}
?>
</div>
</body>
</html>
