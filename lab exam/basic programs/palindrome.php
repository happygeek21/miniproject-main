<?php

$num = 123;

$total = 0;

$ntemp=$num;

while(floor($ntemp))
{
	$rem=$ntemp%10;
	$total = ($total*10)+$rem; 
	$ntemp=$ntemp/10;
}
if($total==$num)
{
	echo("$num is a palindrome!");
}
else
{
	echo("$num is not a palindrome!");
}
?>