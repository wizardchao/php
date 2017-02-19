<?php
	$arr=[2,5,7,6,3,1,4];
	$arr1=[10,2,36,14,11,25,23,85,99,45];
	echo "<pre>";
	print_r(arraySort($arr1));
	echo "</pre><br/>";

	function arraySort($arr){
	$length=count($arr);
	for($i=1;$i<=$length;$i++){
		for($j=0;$j<$length-$i;$j++){
			if($arr[$j]>$arr[$j+1]){
				$a=$arr[$j];
				$arr[$j]=$arr[$j+1];
				$arr[$j+1]=$a;
			}
		}	
	}
	return $arr;
	}
	