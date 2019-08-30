<?php
error_reporting(0);

Class Task7
{
	function sum($argv){
		$sum = 0;
		$string =str_replace('\\', ',', $argv);
		$arrNumbers = explode(',',$string);
		foreach( $arrNumbers as $arrNumber ){
			if($arrNumber>1000){
			} else {
					$sum = $sum+$arrNumber;
			}
		}		
		echo $sum;
	}
	
}

$value=getopt(null, ["n:"]);
Task7::sum($value['n']);
?>