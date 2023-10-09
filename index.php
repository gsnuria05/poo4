<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio POO Individual 3</title>
</head>
<body>

<form method="POST" action="">
    <table>
        <tr>            
        <tr>
            <td>
                <label>Valor 1:</label>
                <input type="number" name="numero1">
            </td>
        </tr>
        <tr>            
        <tr>
            <td>
                <label>Valor 2:</label>
                <input type="number" name="numero2">
            </td>
        </tr>
    </table>
    <input type="submit" name="boton1" value="Suma">
    <input type="submit" name="boton2" value="Resta">
    <input type="submit" name="boton3" value="Multiplicación">
    <input type="submit" name="boton4" value="División">
</form>

<?php
//Llamar a la función

include('Operaciones.php');

//Definir variables

$valor1=$_POST['numero1'];
$valor2=$_POST['numero2'];

//Crear un objeto ; Instanciar un atributo

$suma=new Suma();
$resta=new Resta();
$multiplicacion=new Multiplicacion();
$division=new Division();

echo '<hr>';

//SUMA

if(isset($_POST['boton1']))
{
    echo $suma->operacion($valor1,$valor2);
}

//RESTA

elseif(isset($_POST['boton2']))
{
    echo $resta->operacion($valor1,$valor2);
} 

//MULTIPLICACIÓN

elseif(isset($_POST['boton3']))
{
    echo $multiplicacion->operacion($valor1,$valor2);
} 

//DIVISIÓN

elseif(isset($_POST['boton4']))
{
    echo $division->operacion($valor1,$valor2);
}
?>

</body>
</html>