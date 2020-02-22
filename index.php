<?php 

echo("Taller 1 - Elaborado por: Daniiel Castrillon");
echo("<br>");
echo("<br>");

echo("Ejercicio # 1");
echo("<br>");
//Suma
$num1=10;
$num2=20;
$operacion=$num1+$num2;
echo("<br>");
echo("La suma de ".$num1." + ".$num2." = ".$operacion);
//Resta
$num1=20;
$num2=10;
$operacion=$num1-$num2;
echo("<br>");
echo("La resta de ".$num1." - ".$num2." = ".$operacion);
//Multiplicacion
$num1=50;
$num2=2;
$operacion=$num1*$num2;
echo("<br>");
echo("La multiplicación de ".$num1." * ".$num2." = ".$operacion);
//Division
$num1=20;
$num2=2;
$operacion=$num1/$num2;
echo("<br>");
echo("La division de ".$num1." / ".$num2." = ".$operacion);
echo("<br>");
echo("<br>");

echo("Ejercicio # 2");
echo("<br>");

$peso=85;
$estatura=1.78;
$imc=$peso/$estatura;

if($imc<=18.4){
    echo("Insuficiencia de peso");
}
elseif($imc<=18.5 || $imc<=24.9){
    echo("Peso normal");
}

?>