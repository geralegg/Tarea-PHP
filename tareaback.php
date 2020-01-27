<?php 

if(isset($_GET['enviar'])){
		$numero =$_GET['numero'];}


echo "<center><u>". "Respuestas". "</u></center>";
echo "<br>". "</br>";
echo "<center><table border = '1' bgcolor= '#F8E0E6'>";

$fact = 1; 
    for ($i = 1; $i <= $numero; $i++)
    { $fact = $fact*$i;} 

echo "<tr align='center'>"; 
echo "<td>". "El factorial de ". $numero. " es: ". "</td>";
echo "<td>". "<center>". $fact."</center>"."</td>";
echo "</tr>";

echo "<tr align='center'>"; 
echo "<td>"."¿El número es primo?". "</td>";

$divisor=0;
    for($i=1;$i<=$numero;$i++)
    {
        if($numero%$i==0)
        	{$divisor = $divisor + 1;}
    }
    if($divisor>2)
      {echo "<td>". "No"."</td>";}
    else 
   		{echo "<td>". "Sí"."</td>";}
echo "</tr>";

$sum = 0; 
$sp = 0;
$si = 0;
for($a=1; $a<=$numero; $a++)
{
$sum = $sum + $a;
	if ($a%2==0)
		{$sp = $sp + $a;}
	else 
		{$si = $si + $a;}
}

echo "<tr align='center'>";
echo "<td>". "La suma desde 0 hasta ". $numero. " es: ". "</td>";
echo "<td>". "<center>". $sum. "</center>". "</td>";
echo "</tr>";

echo "<tr align='center'>"; 
echo "<td>". "La suma de los números pares desde 0 hasta ". $numero. " es: ". "</td>";
echo "<td>". "<center>". $sp. "</center>". "</td>";
echo "</tr>";

echo "<tr align='center'>"; 
echo "<td>". "La suma de los números impares desde 0 hasta ". $numero. " es: ". "</td>";
echo "<td>". "<center>". $si. "</center>". "</td>";
echo "</tr>";

echo "</table> </center>";

?>