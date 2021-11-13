<h2>Tabla de multiplicar de un numero entero</h2>
 
@for ($i = 1; $i <= 10; $i++)
    @php ($Resultado = $A*$i) 
    <p>{{$A}}x {{$i}} = {{$Resultado}} </p>
@endfor



<h2>Salario de alguien</h2>
@for($P=1;$P <=6; $P++)
    @php ($porcentaje = $salario/100*10)
    @php ($salario=$salario+$porcentaje)
    <p>Resultado: {{$salario}}, porcentaje de: {{$porcentaje}}
@endfor


<h2>Aprobados y reprobados</h2>
@php ($contap=0)
@php ($contrp=0)


@for($m=0;$m <=4; $m++)
    @if($array[$m]>5)
        @php ($contap = $contap +1) 
    @else
        @php ($contrp=$contrp+1)
    @endif
    
@endfor    
<p>Reprobados: {{$contrp}} aprobados: {{$contap}}</p>