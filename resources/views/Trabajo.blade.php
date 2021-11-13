<?php 
echo "Puedes votar?";
define('dad', 18);
$var = 15;
if ($var >= dad){
    echo "<br>Si";
}else {
    echo "<br>No";
}
$hora = 50;
$plata=2;
echo "<br><br>Pago por hora + aumento";
if ($hora >=40 ){
    $Pago = ($plata*$hora)*2;
    echo "<br>Pago total: ",$Pago;
}elseif ($hora <=39){
    $Pago = ($plata*$hora);
    echo "<br>Pago total: ",$Pago;
}
echo "<br><br>Calificacion en A,B,C,D, etc.";
$calif = 5;
if($calif=0){
echo "<br>F";
}elseif ($calif = 5){
echo "<br>E";
}elseif($calif=7|$calif=6){
echo "<br>D";
}elseif($calif = 8){
    echo "<br>C";
}elseif($calif=9){
    echo "<br>B";
}else{
    echo "<br>A";
}
?>