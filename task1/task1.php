<?php
error_reporting(0);

Class Task1
{
function sum($argv){
		if(count(explode(',',$argv))>2){
				echo 'More than 2 value is not allowed';
		} else {
		echo 'Sum = ' . $a = array_sum(explode(',',$argv));
		
		}
	}
	
}

$value = getopt(['n']);
Task1::sum($n['n']);


?>