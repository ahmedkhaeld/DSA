<?php 


/**
 * The outer array, $students, has five elements, eahc of which is also an array.
 * the inner arrays use the student's ID for the key and store two pieces of data: the sutdent's
 * name and their grades
 */
$students=[
256=>['name'=>'ahmed','grade'=>98.5],
2=>['name'=>'hoda', 'grade'=>99], 
9=>['name'=>'ali', 'grade'=>99], 
374=>['name'=>'omar', 'grade'=>97], 
68=>['name'=>'bebo', 'grade'=>90], 
];


/**
 * name_sort function
 *
 * @param [type] $x
 * @param [type] $y
 * @return negative,0, or positive indicating how similar two strings are
 * if -ve, the first string comes before the second string
 * if +ve, the second string comes before the first string
 * if 0, the two strings are the same              
 */
function name_sort($x, $y) {
    return strcasecmp($x['name'], $y['name']);
}

/**
 * grade_sort function
 * depending on the comparison operator: list the highest grade first
 * if the first argument is less than the second argument, the value true is returned,
 * which indicated the second argument should come first in the ordered list.
 *
 * @param [type] $x
 * @param [type] $y
 * 
 */
function grade_sort($x, $y) {
    return ($x['grade'] < $y['grade']);
    }

/**
 * usort automatically loops through each combination of two elements of the array, 
 * compares whatever you want it to compare in the callback function, and
 *  by returning -1 or 1 respectively, it assigns the appropriate index to the given
 * element in the resulting array.
 */
    usort($students, 'name_sort');
    echo '<h2>Array As Is</h2><pre>' . print_r($students, 1) . '</pre>';
   
    usort($students, 'grade_sort');
    echo '<h2>Array As Is</h2><pre>' . print_r($students, 1) . '</pre>';

















?>