<?php
error_reporting(0);

Class Task2
{
	
	function sum($argv){
		echo 'Sum = ' . array_sum(explode(',',$argv));
	}
	
}

$value = getopt(['n']);
Task2::sum($value['n']);
?>