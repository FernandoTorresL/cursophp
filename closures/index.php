<?php
/*      $var2 = 1;

      $var = function () use ($var2) {
      	echo 'This is a closure<br>';
      	echo 'Value: ' . $var2;
      };

      $var();*/

	$x = 3;
	$numbers = [1, 2, 3, 4, 5];

	$result = array_map(function ($n) use ($x) {
		return $n * $x;
	}, $numbers);

	var_dump($result);
