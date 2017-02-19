<?php
	// ini_set("memory_limit","80M");
	$arr=array(6,3,8,6,4,2,9,5,1);

	function quick_sort($arr){
		if(!is_array($arr)) return false;
		$length=count($arr);
		if($length<=1) return $arr;
		$left=array();
		$right=array();
		for($i=1;$i<$length;$i++){
			if($arr[$i]<$arr[0]){
				$left[]=$arr[$i];
			}else{
				$right[]=$arr[$i];
			}
		}
		$left=quick_sort($left);
		$right=quick_sort($right);
		return array_merge($left,array($arr[0]),$right);
	}
	echo "<pre>";
	print_r(quick_sort($arr)); 
