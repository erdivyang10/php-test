<?php
error_reporting(0);

Class Task5
{
	
	function sum($argv){
		$string =str_replace('\\', ',', $argv);
		
		if (strpos($string, '-') == true) {
			echo 'Negative Number not allowed';
		} else {
		echo 'Sum = ' . array_sum(explode(',',$string));
		}
	}
	
}

$value=getopt(null, ["n:"]);
Task5::sum($value['n']);
?>