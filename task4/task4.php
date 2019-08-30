<?php
error_reporting(0);

Class Task4
{
	
	function sum($argv){
		$number =str_replace('\\', ';', $argv);
		echo 'Sum = ' . array_sum(explode(';',$number));
	}
	
}

$value=getopt(null, ["n:"]);
Task4::sum($value['n']);
?>