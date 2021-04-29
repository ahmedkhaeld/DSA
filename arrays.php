<?php

// an array called $vegetables with string keys
$vegetables=[
    'corn'=> 'yellow',
    'beet'=> 'red',
    'carrot'=> 'orange',
];

// an array called $dinner with numeric keys
$dinner=[
0=>'sweet corn and asparagus',
1=> 'lemon chicken',
2=> 'braised bamboo fungus',
];

echo "<br/>";
$dishes= count($dinner);
echo " we have  $dishes dishes on the menue";

echo "<br/>";

echo "i want  $dinner[0] and  $dinner[1]";

echo "<br/>";
echo "<br/>";

$meal=[
'breakfast'=> 'smashed potatos',
'lunch'=> 'rice and chicken with salad',
'dinner'=> ' eggplant with peans and cheese'
];

print "<table>\n";
foreach ($meal as $key => $value) {
    print "<tr><td>$key</td><td>$value</td></tr>\n";
}


print '</table>';



echo "<br/>";
echo "<br/>";

$meals = array('Walnut Bun' => 1,
               'Cashew Nuts and White Mushrooms' => 4.95,
               'Dried Mulberries' => 3.00,
               'Eggplant with Chili Sauce' => 6.50);

foreach ($meals as $dish => $price) {
    // $price = $price * 2 does NOT work
    $meals[$dish] = $meals[$dish] * 2;
}

// Iterate over the array again and print the changed values
foreach ($meals as $dish => $price) {
    echo "The new price of $dish is $price.<br/>";
}


// remove an element from an array, use unset()
/* remving an element with unset() is different than just setting the element
to value to 0 or the empty string. when yu use unset(), the element is no longer there when you iterate 
through the array or coutn the number of elements. like saying that the store no longer have a the product
setting element's value to 0 or empty string says the store is out of stock temorarliy.

*/
//unset($dishes['Roast Duck']);



//Iterating through a multidimensional assoc array with foreach( )

/* loop through main array and its key is $culture japanese and chinese
the the value is culture_flavor for this level 
next level iterate through those values in culture_flavor array
 


*/

$flavors=[
    'Japanese'=>['hot'=>'wasabi','salty'=>'soy sauce' ],
    'Chinese'=>['hot'=> 'mustard', 'pepper-salty'=>'prickly ash'],
];

foreach($flavors as $culture => $culture_flavor){
    foreach($culture_flavor as $flavor => $example){
        
        echo " A $culture $flavor falvor is $example . <br/>";
    }
}












?>