<?php 
function fact($n,$m){
	$k=0;
	$monkey = range(1,$n);
	$i = 0;
	while(count($monkey)>1){
		$i++;
		$k++;
		$header = array_shift($monkey);
		if($i % $m != 0){
			array_push($monkey,$header);
		}
	}
	echo $k,"\n";
	return $monkey[0];
}

echo fact(6,3);

