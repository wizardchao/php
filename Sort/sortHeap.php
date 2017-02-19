<?php
	$arr=[49,38,65,97,76,13,27,50];
	sortHeap($arr);
	print_r($arr);

	function sortHeap(&$arr){
		buildHeap($arr);
		$count=count($arr);
		while($count>1){
			swap($arr,$count-1,0);
			$count--;
			adjustHeap($arr,$count,0);
		}
	}

	function buildHeap(&$arr){
		$node=floor(count($arr)/2)-1;
		for($i=$node;$i>=0;$i--){
			adjustHeap($arr,count($arr),$i);
		}
	}

	function adjustHeap(&$arr,$maxLen,$node){
		$lchild=2*$node+1;
		$rchild=2*$node+2;

		$max=$node;
		while($lchild<$maxLen || $rchild<$maxLen){
			if($lchild<$maxLen && $arr[$lchild] > $arr[$max]){
				$max=$lchild;
			}
		

			if($rchild < $maxLen  && $arr[$rchild] > $arr[$max]){
				$max=$rchild;
			}

			if($max!=$node){
				swap($arr,$max,$node);
				$node=$max;
				$lchild=2*$node+1;
				$rchild=2*$node+2;
			}else{
				break;
			}
		}
	}
	
	function swap(&$arr,$m,$n){
		$arr[$m]=$arr[$m]^$arr[$n];
		$arr[$n]=$arr[$n]^$arr[$m];
		$arr[$m]=$arr[$m]^$arr[$n];
	}