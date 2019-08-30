<?php
error_reporting(0);

Class Task6
{
	function sum($argv){
		$num = '';
		$string =str_replace('\\', ',', $argv);
		$arrNumbers = explode(',',$string);
		foreach( $arrNumbers as $arrNumber ){
			if($arrNumber<0){
				$num = $num .','.$arrNumber;
			} else {
		
			}
		}		
		if(!empty($num)){
		echo ' Negative number is { ' . $num .' }';
		}
	}
	
}

$value=getopt(null, ["n:"]);
Task6::sum($value['n']);
?>