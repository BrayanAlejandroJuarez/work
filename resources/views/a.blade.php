<h2>Puedes votar?</h2>
@if ($age1 >= 18)
    <p>si</p>
@else 
    <p>No</p>
@endif

<h2>Pago por hora + aumento</h2>
@if ($hora >=40 )
    @php ($Pago = ($plata*$hora)*2)
    <p>Pago total: {{$Pago}}</p>
@elseif ($hora <=39)
    @php ($Pago = ($plata*$hora))
    <p>Pago total: {{$Pago}}</p>
@endif

<h2>Calificacion en A,B,C,D, etc.</h2>

@if($po==0)
<p>F</p>
@elseif ($po == 5)
<p>E</p>
@elseif($po==7|$po==6)
<p>D</p>
@elseif($po == 8)
    <p>C</p>
@elseif($po==9)
    <p>B</p>
@else
    <p>A</p>
@endif