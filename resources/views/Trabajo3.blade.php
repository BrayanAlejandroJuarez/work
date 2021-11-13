<?php
echo "Tabla de multiplicar de un numero entero";
$A=4;
for ($i = 1; $i <= 10; $i++){
$Resultado = $A*$i;
echo "<br>4x",$i ,"= ",$Resultado ;
}
$salario=1500;
echo "<br><br> Salario de alguien";
for($P=1;$P <=6; $P++){
$porcentaje = $salario/100*10;
$salario=$salario+$porcentaje;
echo "<br>Resultado: ",$salario , ", porcentaje de ", $porcentaje;
}
echo "<br><br>Aprobados y reprobados";
$contap=0;
$contrp=0;
$array=array(
0 => "5",
1 => "6",
2 => "7",
3 => "8",
4 => "0",);
for($m=0;$m <=4; $m++){
if($array[$m]>5){
$contap = $contap +1;
}else{
$contrp=$contrp+1;
}
}echo "<br>Reprobados: " , $contrp , " aprobados: ",$contap;
?>