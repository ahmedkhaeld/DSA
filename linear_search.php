 
<?php

function linear_search( Array $list, $target)
{
    /**
     * Rturns the index position of the target if found, else returns None
     */

    $length=count($list);
    for ($i=0; $i< $length ; $i++) {
        if ($list[$i]== $target) {
            return $i;
        }
    }
    return -1;
}

function verify($index){
    if($index != false){
        echo " Target found at index : " . $index;
    }else{
        echo " Target not found in the list  " . $index;
    }
}

$numbers=[1,2,3,4,5,6,7,8,9];
$result=linear_search($numbers, 8);
 verify($result);



?>