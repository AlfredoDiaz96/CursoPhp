<?php


#CONDICIONALES

$a = 15;
$b = 10;

if ($a > $b) {
	
	echo "a es mayor que b";
}

elseif ($a < $b) {
	
	echo "a es menor que b";
}

else{
	
	echo "son iguales";	
}

echo "</br>";

#switches

$dia = "lunes";

switch ($dia) {
	case 'sabado':
		echo "hoy es sabado de PHP";
		break;

	case 'viernes':
		echo "es viernes de fiesta";
		break;

	case 'domingo':
		echo "domingo de descanso";
		break;
	
	default:
		echo "dia de universidad";
		break;
}
echo "</br>";



#CICLOS

$n = 1;

while ($n <= 5) {
	
	echo $n;
	$n++;
}
echo "</br>";


#DO WHILE
echo "DO WHILE</br>";
$p = 1;

do{

	echo $p;
	$p++;
} while($p <= 5);

echo "</br>";


#CICLO FOR

for ($i=0; $i <= 5; $i++) { 
	
	echo $i;
}




?>