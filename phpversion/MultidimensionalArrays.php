
  <?php
  $array = [
              [
                ['name'=>'John B'],
                ['age'=>30],
                ['sizes'=>
                          [
                          'weight'=>80, 
                          'height'=>120
                          ]
                ]
              ],
              [
                ['name'=>'Marie B'],
                ['age'=>31],
                ['sizes'=>
                          [
                          'weight'=>60, 
                          'height'=>110
                          ]
                ]
              ],
              [
                ['name'=>'Carl M'],
                ['age'=>12],
                ['sizes'=>
                          [
                          'weight'=>70, 
                          'height'=>100
                          ]
                ]
              ],
              [
                ['name'=>'Mike N'],
                ['age'=>19],
                ['sizes'=>
                          [
                          'weight'=>70, 
                          'height'=>150
                          ]
                ]
              ],
              [
                ['name'=>'Nancy N'],
                ['age'=>15],
                ['sizes'=>
                          [
                          'weight'=>60, 
                          'height'=>150
                          ]
                ]
              ],
              [
                ['name'=>'Cory X'],
                ['age'=>15],
                ['sizes'=>
                          [
                          'weight'=>44, 
                          'height'=>150
                          ]
                ]
              ]
  ];
  /**
   * method4 function
   * order array by ascending order according to the weight
   * Combining array_multisort() with array_map() and its callback for 
   * obtaining an array of weights, allows for this complex sorting to
   * happen in only one call.
   *
   */


  array_multisort(array_map(function($element) {
    return $element[2]['sizes']['weight'];
}, $array), SORT_ASC, $array);
  echo '<h2>Array As Is</h2><pre>' . print_r($array, 1) . '</pre>';

  ?>