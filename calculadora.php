<?php  

echo 'Datos de la calculadora'.'<br>';

$x= $_POST['dato1'];
$y= $_POST['dato2'];
echo '<br><hr>';
echo 'Resultado de la suma ';
$s= $x+$y;
echo "$x + $y = $s";
echo '<br><hr>';
echo 'Resultado de la divicion'.'<br>';
$j=0;
if ($y>$j)
{
	$div= $x/$y;
	echo "La divicion es :$x/$y=$div";


}else{
	echo 'La divicion no se puede realizar.No se puede dividir entre cero';
}

echo '<br><hr>';
echo 'Resultado de la restas ';
$res= $x-$y;
echo "$x-$y=$res";
echo '<br><hr>';
echo 'Resultado de la multiplicacion ';
$mul= $x*$y;
echo "$x*$y=$mul";
echo '<br><hr>';
if('$x>$Y'){
echo $x.' es mayor que '.$y;	
}if ('$x<$Y') {

	echo '<br>'.$y.' es menor que '.$x;
}


echo '<br><hr>';
echo 'Tablas de multiplicacion '.'<br>';

$base = $x;
for($i=0; $i<=10; $i++)
{
	echo $base.'x'.$i.'='. ($base*$i).'<br>';
}
echo '<br><hr>';
$base = $y;
for($i=0; $i<=10; $i++)
{
	echo $base.'x'.$i.'='. ($base*$i).'<br>';
}
echo '<br><hr>';


?>