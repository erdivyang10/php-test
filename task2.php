<?php
Class Task2
{
	
	function sum($argv){
		echo 'Sum = ' . array_sum(explode(',',$argv));
	}
	
}

$n=getopt(null, ["n:"]);
Task2::sum($n['n']);
?>