<?php 

function recusive_binary_search ( array $list, $target, $start, $end){

if ($start>$end)
return -1;

$midpoint=($start + $end) >> 1;
if($list[$midpoint]==$target){
    return $midpoint;
} elseif ($list[$midpoint]>$target) {
    return recusive_binary_search($list, $target, $start, $midpoint-1);
} elseif ($list[$midpoint]<$target) {
    return recusive_binary_search($list, $target,$midpoint+1, $end);
}

}

function verfiy($result){
    if ($result != -1) {
        echo "True";
    } else{
        echo    "False" ;
    }
}

$numbers=[1,2,3,4,5,6,7,8,9];
$last=count($numbers) -1;
$start=0;

$result= recusive_binary_search($numbers, -9, $start, $last );
verfiy($result);





























?>