<?php
	$rs=[
	"h"=>["id","name"],
	"d"=>[[100,"Tom"],[101,"Jane"],[102,"Alice"]]
	];
	$res=rs2Array($rs);
	print json_encode($res);
		function rs2Array($rs){
			$total=$rs['d'];
			$line=$rs['h'];
			$k=0;
		foreach($total as $l){
			$i=0;
			$j=0;
			$newArray=[];
			foreach($line as $t){
					$array[$i]=[
					$rs['h'][$i]=>$rs['d'][$k][$j++]
					];
					$newArray+=$array[$i];
					$i++;
			}
			$arr[$k]=$newArray;
			$k++;
		}
		return $arr;
	}
		
	
