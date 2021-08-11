<?php
	$no = 100;
	echo "Testing with count(\$array)=$no and memory_limit=" . ini_get("memory_limit") . "." . "<br>";

	echo "Starting method 1: " . "<br>";
	$array= [];
	$took_too_much = false;
	$too_much = 20; // 20 seconds max

	for ($i=0; $i < $no; $i++) { 
		$array[$i] = [
			['name' => str_repeat(array_rand(range('a', 'z')), 8)],
			['age' => rand(10,100)],
			[
				'sizes' => [
					'weight' => rand(50,120),
					'height' => rand(120,205)
				]
			]
		];
	}
	$m1 = $m2 = $m3 = $m4 = $array;
	$start = microtime(true);
	
	try {
		usort( $m1, function ($a,$b) use ($start, $too_much) {
			if((microtime(true) - $start)>$too_much) {
				throw new Exception("This took too much", 1);
			}
			return ($a[2]["sizes"]["weight"] <= $b[2]["sizes"]["weight"]) ? -1 : 1;
		});
	} catch (Exception $e) {
		$took_too_much = true;
		echo "Method 1 took more than $too_much seconds ... quitting ... " ."<br>";
	}

	if(!$took_too_much) {
		echo "Method 1 took:" . number_format((microtime(true) - $start), 3) . " seconds to execute and needed " . number_format(( memory_get_usage(false) / 1000000 ), 2) . "MB of memory to execute" . "<br>";
	}
	//-----END M1------\\


	echo "Starting method 2: " . "<br>";
	$start = microtime(true);
	$j=0;
	$flag = true;
	$temp=0;
	$took_too_much = false;
	while ( $flag )
	{
		$flag = false;
        $length=count($m2)-1;
		for( $j=0;  $j < $length; $j++)
		{
			if ( $m2[$j][2]["sizes"]["weight"] > $m2[$j+1][2]["sizes"]["weight"] ) {
				$temp = $m2[$j];
				//swap the two between each other
				$m2[$j] = $m2[$j+1];
				$m2[$j+1]=$temp;
				$flag = true; //show that a swap occurred
			}
		}
		if((microtime(true) - $start)>$too_much) {
			$took_too_much = true;
			echo "Method 2 took more than $too_much seconds ... quitting ... " . "<br>";
			break;
		}
	}
	if(!$took_too_much) {
		echo "Method 2 took:" . number_format((microtime(true) - $start), 3) . " seconds to execute and needed " . number_format(( memory_get_usage(false) / 1000000 ), 2) . "MB of memory to execute" . "<br/>";
	}
	//-----END M2------\\



	echo "Starting method 3: " . "<br>";
	$took_too_much = false;
	$start = microtime(true);
	$temp = [];
	foreach ($m3 as $key => $value) {
		if((microtime(true) - $start)>$too_much) {
			$took_too_much = true;
			echo "Method 3 took more than $too_much seconds ... quitting ... " ."<br>";
			break;
		}
		$temp[$value[2]["sizes"]["weight"] . "oldkey" . $key] = $value; //concatenate something unique to make sure two equal weights don't overwrite each other
	}
	ksort($temp, SORT_NATURAL); // or ksort($temp, SORT_NATURAL); see paragraph above to understand why
	if((microtime(true) - $start)>$too_much) {
		$took_too_much = true;
		echo "Method 3 took more than $too_much seconds ... quitting ... " . "<br>";
	}
	$m3 = array_values($temp);
	if((microtime(true) - $start)>$too_much) {
		$took_too_much = true;
		echo "Method 3 took more than $too_much seconds ... quitting ... " . "<br>";
	}
	if(!$took_too_much) {
		echo "Method 3 took:" . number_format((microtime(true) - $start), 3) . " seconds to execute and needed " . number_format(( memory_get_usage(false) / 1000000 ), 2) . "MB of memory to execute" . "<br>";
	}
	unset($temp);
	//------END M3-----\\



	echo "Starting method 4: " . "<br>";
	$start = microtime(true);
	try {
		array_multisort(array_map(function($element) use ($start, $too_much) {
			if((microtime(true) - $start)>$too_much) {
				throw new Exception("This took too much", 1);
			}
			return $element[2]['sizes']['weight'];
		}, $m4), SORT_NATURAL, $m4);
	} catch (Exception $e) {
		$took_too_much = true;
		echo "Method 4 took more than $too_much seconds ... quitting ... " . "<br>";
	}
	if(!$took_too_much) {
		echo "Method 4 took:" . number_format((microtime(true) - $start), 3) . " seconds to execute and needed " . number_format(( memory_get_usage(false) / 1000000 ), 2) . "MB of memory to execute" . "<br>";
	}
	//------END M4-----\\
