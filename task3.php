<?php
Class Task3
{
	
	function sum($argv){
		$string =str_replace('\n', ',', $argv);;
		echo 'Sum = ' . array_sum(explode(',',$string));
	}
	
}

$n=getopt(null, ["n:"]);
Task3::sum($n['n']);
?>