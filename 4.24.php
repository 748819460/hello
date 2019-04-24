<?php 
function b($n)
{
	$num=1;
	$num = ($n-1,b($num+1));
	return $num;
}

 ?>