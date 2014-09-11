<?php
	error_reporting(E_ALL);
	ini_set('display_errors', true);
?>
<html>
<head>
	<title>Array Functions - Certification PHP 5.5</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>
			<a href="http://php.net/manual/en/ref.array.php" target="_blank">Array Functions</a>
			 <span class="badge">Version</span>
		</h1>
		
		
		
		<h2>array_change_key_case() <span class="badge">4.2+</span></h2>
		<div><?php
			$arr = [
				'ToTo' => 'ToTo',
				0 => 'T0T0',
				'Array' => []
			];
			var_dump(array_change_key_case($arr, CASE_LOWER)); // CASE_UPPER
		?></div>
		
		
		
		<h2>array_chunk() <span class="badge">4.2+</span></h2>
		<div><?php
			$arr = [
				'a', 'b' => ['x', 'y', 'z'], 'c', 'd', 'e',
			];
			var_dump(array_chunk($arr, 2, true));
		?></div>
		
		
		
		<h2 class="text-danger">array_column() <span class="badge">5.5+</span></h2>
		<div><?php
			$arr = [
				array(
					'id' => 2135,
					'first_name' => 'John',
					'last_name' => 'Doe',
				),
				array(
					'id' => 3245,
					'first_name' => 'Sally',
					'last_name' => 'Smith',
				),
				array(
					'id' => 5342,
					'first_name' => 'Jane',
					'last_name' => 'Jones',
				),
				array(
					'id' => 5623,
					'first_name' => 'Peter',
		//			'last_name' => 'Doe',
				),
			];
			var_dump(array_column($arr, 'first_name'));
			var_dump(array_column($arr, 'first_name', 'id'));
			var_dump(array_column($arr, 'first_name', 'last_name'));
		?></div>
		
		
		
		<h2>array_combine() <span class="badge">5+</span></h2>
		<div><?php
			$arr1 = ['green', 'red', 'yellow'];
			$arr2 = ['avocado', 'apple', 'banana'];
			var_dump(array_combine($arr1, $arr2));
		?></div>
		
		
		
		<h2>array_count_values() <span class="badge">4+</span></h2>
		<div><?php
			$arr = [
				5,
				'Hello',
				'5',
				'world',
				'Hello',
				// +
				'w1' => 'o',
				'w2' => 'r',
				'w3' => 'o',
				'w4' => ['x', 'x', 'y', 'z'], // ignored ==>> E_WARNING
			];
			var_dump(array_count_values($arr));
		?></div>
		
		
		
		<h2>array_diff_assoc() <span class="badge">4.3+</span></h2>
		<div><?php
			$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
			$array2 = array("a" => "green", "yellow", "red");
			var_dump(array_diff_assoc($array1, $array2)); // Not present in any of the other arrays
		?></div>
		
		
		
		<h2>array_diff_key() <span class="badge">5.1+</span></h2>
		<div><?php
			$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4, 18);
			$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8, 9,8);
			var_dump(array_diff_key($array1, $array2));
		?></div>
		
		
		
		<h2>array_diff_uassoc() <span class="badge">5+</span></h2>
		<div><?php
			$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
			$array2 = array("a" => "green", "yellow", "red");
			var_dump(array_diff_uassoc($array1, $array2, function($a, $b) {
				echo "/ $a $b /";
				if ($a === $b) { return 0; }
				return ($a > $b) ? 1 : -1;
			}));
		?></div>
		
		
		
		<h2>array_diff_ukey() <span class="badge">5.1+</span></h2>
		<div><?php
			$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
			$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
			var_dump(array_diff_ukey($array1, $array2, function($k1, $k2) {
				echo "/ $k1 $k2 /";
				if ($k1 == $k2) { return 0; }
				return ($k1 > $k2) ? 1 : -1;
			}));
		?></div>
		
		
		
		<h2>array_diff() <span class="badge">4.0.1+</span></h2>
		<div><?php
			$array1 = array("a" => "green", "red", "blue", "red");
			$array2 = array("b" => "green", "yellow", "red");
			var_dump(array_diff($array1, $array2));
		?></div>
		
		
		
		<h2>array_fill_keys() <span class="badge">5.2+</span></h2>
		<div><?php
			$keys = array('foo', 5, 10, 'bar', 'x' => 'hello', []); // [] ==>> E_NOTICE
			var_dump(array_fill_keys($keys, 'banana'));

		?></div>
		
		
		
		<h2>array_fill() <span class="badge">4.2+</span></h2>
		<div><?php
			var_dump(array_fill(5, 6, 'banana'));
			var_dump(array_fill(-2, 4, 'pear'));
			var_dump(array_fill('a', 'z', 'pear')); // null -->> E_WARNING
		?></div>
		
		
		
		<h2>array_filter() <span class="badge">4.0.6+</span></h2>
		<div><?php
			$array1 = array("a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5);
			var_dump(array_filter($array1, function($var) {
				return ($var & 1); // odd ( impair )
//				return !($var & 1); // even ( pair )
			}));
		?></div>
		
		
		
		<h2>array_flip() <span class="badge">4+</span></h2>
		<div><?php
			$arr = array("a" => 1, "b" => 1, "c" => 2, 'd' => []); // ignored ==>> E_WARNING
			var_dump(array_flip($arr));
		?></div>
		
		
		
		<h2>array_intersect_assoc() <span class="badge">4.3+</span></h2>
		<div><?php
			$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red"); // [0] = "red"
			$array2 = array("a" => "green", "b" => "yellow", "blue", "red"); // red ne ressort pas car [1] = "red"
//			$array2 = array("a" => "green", "b" => "yellow", "d" => "blue", "red"); // red ressort car [0] = "red"
			var_dump(array_intersect_assoc($array1, $array2));
		?></div>
		
		
		
		<h2>array_intersect_key() <span class="badge">5.1+</span></h2>
		<div><?php
			$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4, []);
			$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8, []);
			var_dump(array_intersect_key($array1, $array2));
		?></div>
		
		
		
		<h2>array_intersect_uassoc() <span class="badge">5+</span></h2>
		<div><?php
			$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red"); // [] ==>> E_NOTICE
			$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
			var_dump(array_intersect_uassoc($array1, $array2, "strcasecmp"));
//			var_dump(array_intersect_assoc($array1, $array2));
		?></div>
		
		
		
		<h2>array_intersect_ukey() <span class="badge">5.1+</span></h2>
		<div><?php
			$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4, []);
			$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8, []);
			var_dump(array_intersect_ukey($array1, $array2, function($k1, $k2) {
				if ($k1 == $k2) { return 0; }
				return ($k1 > $k2 ? 1 : -1);
			}));
		?></div>
		
		
		
		<h2>array_intersect() <span class="badge">4.0.1+</span></h2>
		<div><?php
			$array1 = array("a" => "green", "red", "blue"); // [] ==>> E_NOTICE
			$array2 = array("b" => "green", "yellow", "red");
			var_dump(array_intersect($array1, $array2));
		?></div>
		
		
		
		<h2>array_key_exists() <span class="badge">4.0.7</span></h2>
		<div><?php
			$search_array = array('first' => null, 'second' => 4);
			var_dump(array_key_exists('first', $search_array)); // true
			echo '<p>Attention avec <code>isset()</code></p>';
			var_dump(isset($search_array['first'])); // false 
		?></div>
		
		
		
		<h2>array_keys() <span class="badge">4+</span></h2>
		<div><?php
			$array = array("color" => array("blue", "red", "green"),
			               "size"  => array("small", "medium", "large"));
			var_dump(array_keys($array));
			
			$array = array("blue", "red", "green", "blue", "blue");
			var_dump(array_keys($array, "blue"));
		?></div>
		
		
		
		<h2>array_map() <span class="badge">4.0.6+</span></h2>
		<div><?php
			$a = array(1, 2, 4, 8, 16);
			var_dump(array_map(function($n) {
				return $n * $n;
			}, $a));
		?></div>
		
		
		
		<h2>array_merge_recursive() <span class="badge">4.0.1+</span></h2>
		<div><?php
			$ar1 = array("color" => array("favorite" => "red"), 5);
			$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
			var_dump(array_merge_recursive($ar1, $ar2));
		?></div>
		
		
		
		<h2>array_merge() <span class="badge">4+</span></h2>
		<div><?php
			$ar1 = array("color" => array("favorite" => "red"), 5);
			$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
			var_dump(array_merge($ar1, $ar2));
			var_dump(array_merge([], [1 => 'One'])); // DANGER
			echo '<hr/>';
			
			$array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
			$array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
			var_dump($array1 + $array2); // not re-indexing
			var_dump(array_merge($array1, $array2));
		?></div>
		
		
		
		<h2>array_multisort() <span class="badge">4+</span></h2>
		<div><?php
			$ar1 = array(10, 100, 100, 0);
			$ar2 = array(1, 3, 2, 4);
			var_dump(array_multisort($ar1, $ar2));
			var_dump($ar1, $ar2);
			echo '<hr/>';
			
			$ar1 = array(10, 100, 100, 0);
			var_dump(array_multisort($ar1, SORT_DESC), $ar1);
		?></div>
		
		
		
		<h2>array_pad() <span class="badge">4+</span></h2>
		<div><?php
			$input = array(12, 10, 9);

			var_dump(array_pad($input, 5, 0));
			var_dump(array_pad($input, -7, -1));
			var_dump(array_pad($input, 2, "noop"));
		?></div>
		
		
		
		<h2>array_pop() <span class="badge">4+</span></h2>
		<div><?php
			$stack = array("orange", "banana", "apple", "raspberry");
			var_dump(array_pop($stack), $stack);
		?></div>
		
		
		
		<h2>array_product() <span class="badge">5.1+</span></h2>
		<div><?php
			var_dump(array_product([2,4,6])); // 48
			var_dump(array_product([])); // 1
			var_dump(array_product([2, '3x'])); // 6
			var_dump(array_product([2, 'x3'])); // 0
		?></div>
		
		
		
		<h2>array_push() <span class="badge">4+</span></h2>
		<div><?php
			// Has the same effect as:  $array[] = $var;
			$stack = array("orange", "banana");
			var_dump(array_push($stack, "apple", "raspberry"), $stack);
		?></div>
		
		
		
		<h2>array_rand() <span class="badge">4+</span></h2>
		<div><?php
			$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
			$rand_keys = array_rand($input, 2);
			var_dump(
				$rand_keys,
				$input[$rand_keys[0]],
				$input[$rand_keys[1]]
			);
			
		?></div>
		
		
		
		<h2>array_reduce() <span class="badge">4.0.5+</span></h2>
		<div><?php
			// http://php.net/manual/fr/function.array-reduce.php
		?></div>
	</div>

<body>
</html>