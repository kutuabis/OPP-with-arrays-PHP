<?php 

class Aos 
{
	private $h;

	public function arrCounting($k)
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

$m = new Aos;
$u = $m->arrCounting(array(4,4,4,4,4));
echo $u;
echo "<br>";
$m->cekOddEven($u);
?>
