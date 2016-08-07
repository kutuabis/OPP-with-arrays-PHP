<?php 

class A 
{
	private $h;

	public function arrCount($k)
	{
		$this->h = count($k);
		return $this->h;
	}	

	public function cekOddEven($uu)
	{
		$getOddEven = fmod($uu,2);
	
		if($getOddEven==0)
			echo "genap";
		else
			echo "ganjil";
	}
}

$m = new A;
$u = $m->arrCount(array(2,4,5,6,7,9));
echo $u;
echo "<br>";
$m->cekOddEven($u);
?>