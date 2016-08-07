<?php 
class A 
{ 
	private $h; 

	public function bil($num) 
	{ 
		$h = fmod($num,2); 
		if($h==0) 
		{ 
			echo "genap"; 
		} 
		else 
		{ 
			echo "ganjil"; 
		} 
	} 
} 

$myA = new A; 
$myA->bil(15); 
?>