<?php

$num = 152;

$total = 0;

$x = $num;

while($x!=0)
{
	$rem = $x % 10; /*chopping*/
	$total = $total + $rem * $rem * $rem; /*main logic cube of number*/
	$x = $x / 10; /*splitting */
	
}

if($num == $total)
{
	echo("It is an armstrong number");
}
else
{
	echo("Not an Armstrong number");
}

?>