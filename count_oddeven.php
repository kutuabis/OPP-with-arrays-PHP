<?php 

class A 
{

	public function arrCount($k)
	{
		$h = count($k);
		return $h;
	}	

	public function cekOddEven($uu)
	{
		$getOddEven = fmod($uu,2);
	
		if($getOddEven==0)
			return $getOddEven;
		else
			echo "Your arrays is odd, I can not continue to proccess";
	}

	public function sumArray($theArray, $resultCountArray)
	{
		$divTwoArray = $resultCountArray/2;
		
		$temp = "0";
		$t="0";
		$turn = '1';
		for($a=0; $a<$resultCountArray; $a++)
		{				
			if($a==$divTwoArray-1)
			{
				$temp = $temp+$theArray[$a];
				$t=$temp;
				echo "first sum : ".$t."<br>";
				$temp=0;
				
			}
			else
				$temp = $temp+$theArray[$a];
			
		}
		echo "second sum : ".$temp."<br>";
		
		
	}

	public function printArray($ar)
	{
		$getCountArray = $this->arrCount($ar);
		
		for($a=0; $a<$getCountArray; $a++)
		{
			if($a<$getCountArray-1)
			{
				echo $ar[$a]. ", ";
			}
			else
				echo $ar[$a];
		}
		echo "<br>";
	}


}

$m = new A;
$a = array(2,6,5,6,7,10,7, 1);

//print array
$m->printArray($a);


//count amount of arrays
$countArray = $m->arrCount($a);
echo "count array : ".$countArray;
echo "<br>";

//check if amount of arrays is even 
$check_if_even = $m->cekOddEven($countArray);
if ($check_if_even == '0')
{	
	$m->sumArray($a, $countArray);
}
?>