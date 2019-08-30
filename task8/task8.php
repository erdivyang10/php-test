<?php
error_reporting(0);

Class Task8
{
	function multi($argv){
		$string =str_replace('\n', ',', $argv);
		echo 'Multiplication Of Number = ' . array_product(explode(',',$string));
	}
	
}

$value=getopt(null, ["n:"]);
Task8::multi($value['n']);
?>