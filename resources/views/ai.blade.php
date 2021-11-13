<html>
<title> a</title>
<body>
<h2>area de triangulo</h2>
@php ($area= 5*6/2)
<p> Area: {{$area}}</p>

<h2>area de trapecio</h2>
@php ($area1= (4+10)*4/2)
<p> Area: {{$area1}}</p>

<h2>longitud de circunferencia</h2>
@php ($area2= 3.1416*(5)^2)
<p>Area: {{$area2}}</p>


<h2>Puedes votar?</h2>
@php ($var = 15)
@if ($var >= 18)
    <p>si</p>
@else 
    <p>No</p>
@endif

@php ($hora = 50)
@php ($plata=2)
<h2>Pago por hora + aumento</h2>
@if ($hora >=40 )
    @php ($Pago = ($plata*$hora)*2)
    <p>Pago total: {{$Pago}}</p>
@elseif ($hora <=39)
    @php ($Pago = ($plata*$hora))
    <p>Pago total: {{$Pago}}</p>
@endif

<h2>Calificacion en A,B,C,D, etc.</h2>
@php ($calif = 5)
@if($calif=0)
<p>F</p>
@elseif ($calif = 5)
<p>E</p>
@elseif($calif=7|$calif=6)
<p>D</p>
@elseif($calif = 8)
    <p>C</p>
@elseif($calif=9)
    <p>B</p>
@else
    <p>A</p>
@endif


<h2>Tabla de multiplicar de un numero entero</h2>
@php ($A=4) 
@for ($i = 1; $i <= 10; $i++)
    @php ($Resultado = $A*$i) 
    <p>4x {{$i}} = {{$Resultado}} </p>
@endfor


@php ($salario=1500) 
<h2>Salario de alguien</h2>
@for($P=1;$P <=6; $P++)
    @php ($porcentaje = $salario/100*10)
    @php ($salario=$salario+$porcentaje)
    <p>Resultado: {{$salario}}, porcentaje de: {{$porcentaje}}
@endfor


<h2>Aprobados y reprobados</h2>
@php ($contap=0)
@php ($contrp=0)
@php ($array=array(
    0  => "5",
    1  => "6",
    2  => "7",
    3  => "8",
    4  => "0",))

@for($m=0;$m <=4; $m++)
    @if($array[$m]>5)
        @php ($contap = $contap +1) 
    @else
        @php ($contrp=$contrp+1)
    @endif
    
@endfor    
<p>Reprobados: {{$contrp}} aprobados: {{$contap}}</p>

</body>
</html>