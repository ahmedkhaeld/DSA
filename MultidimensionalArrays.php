
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
   * method1 function
   * target: order less weight first 
   * if $a is smaller or equal than $b in weight, then $a will end up having smaller index
   * to be ordered first
   * 
   *
   * @param [type] $a
   * @param [type] $b
   * @return -1 or 1
   */
  function method1($a,$b) 
  {
    return ($a[2]["sizes"]["weight"] <= $b[2]["sizes"]["weight"]) ? -1 : 1;
  }
  usort($array, "method1");
  echo '<h2>Array As Is</h2><pre>' . print_r($array, 1) . '</pre>';

  ?>