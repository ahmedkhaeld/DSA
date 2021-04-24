<?php
function binary_search($list, $target)
{
    $beginning=0;
    $ending=count($list)-1;

    while ($beginning <= $ending) {
        $midpoint=($beginning + $ending) >> 1;
        
        if ($list[$midpoint]==$target) {
            return $midpoint;
        } elseif ($list[$midpoint] > $target) {
            $ending=$midpoint - 1;
        } elseif ($list[$midpoint]< $target) {
            $beginning= $midpoint + 1;
        }
    }

    // retrun -1 when the target is out of bounds this will be the condition later to be able find the index 0 of the list 
    // because 0 is false in php if we vefified we true or false
    return -1;
}

function verify($index){
    if($index != -1 ){
        echo " Target found at index : " . $index;
    }else{
        echo " Target not found in the list  " ;
    }
}

$numbers=[1,2,3,4,5,6,7,8,9];
$result=binary_search($numbers, 1);
 verify($result);

$x=-1;


//var_dump(is_bool($x));
































?>