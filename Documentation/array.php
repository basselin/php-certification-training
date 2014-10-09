<?php
	error_reporting(E_ALL);
	ini_set('display_errors', true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Array Functions - Zend Certification PHP 5.5</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>
			<a href="http://php.net/manual/en/ref.array.php" target="_blank">Array Functions</a>
			<span class="badge">Version</span>
		</h1>
		
		
		
		<h3><code>array</code> array_change_key_case(<code>array $array [, int $case = CASE_LOWER]</code>) <span class="badge">4.2+</span></h3>
		<div><?php
			$arr = [
				'ToTo' => 'ToTo',
				0 => 'T0T0',
				'Array' => []
			];
			var_dump(array_change_key_case($arr, CASE_LOWER)); // CASE_UPPER
		?></div>
		
		
		
		<h3><code>array</code> array_chunk(<code>array $array, int $size [, bool $preserve_keys = false]</code>) <span class="badge">4.2+</span></h3>
		<div><?php
			$arr = [
				'a', 'b' => ['x', 'y', 'z'], 'c', 'd', 'e',
			];
			var_dump(array_chunk($arr, 2, true));
		?></div>
		
		
		
		<h3 class="text-danger"><code>array</code> array_column(<code>array $array $clumn_key [, mixed $index_key = null]</code>) <span class="badge">5.5+</span></h3>
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
		
		
		
		<h3><code>array</code> array_combine(<code>array $keys, array $values</code>) <span class="badge">5+</span></h3>
		<div><?php
			$arr1 = ['green', 'red', 'yellow'];
			$arr2 = ['avocado', 'apple', 'banana'];
			var_dump(array_combine($arr1, $arr2));
		?></div>
		
		
		
		<h3><code>array</code> array_count_values(<code>array $array</code>) <span class="badge">4+</span></h3>
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
		
		
		
		<h3><code>array</code> array_diff_assoc(<code>array $array1, array $array2 [, array $...]</code>) <span class="badge">4.3+</span></h3>
		<div><?php
			$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
			$array2 = array("a" => "green", "yellow", "red");
			var_dump(array_diff_assoc($array1, $array2)); // Not present in any of the other arrays
		?></div>
		
		
		
		<h3><code>array</code> array_diff_key(<code>array $array1, array $array2 [, array $...]</code>) <span class="badge">5.1+</span></h3>
		<div><?php
			$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4, 18);
			$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8, 9,8);
			var_dump(array_diff_key($array1, $array2));
		?></div>
		
		
		
		<h3><code>array</code> array_diff_uassoc(<code>array $array1, $array2 [, array $...], callable $key_compare_func</code>) <span class="badge">5+</span></h3>
		<div><?php
			$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
			$array2 = array("a" => "green", "yellow", "red");
			var_dump(array_diff_uassoc($array1, $array2, function($a, $b) {
				echo "/ $a $b /";
				if ($a === $b) { return 0; }
				return ($a > $b) ? 1 : -1;
			}));
		?></div>
		
		
		
		<h3><code>array</code> array_diff_ukey(<code>array $array1, $array2 [, array $...], callable $key_compare_func</code>) <span class="badge">5.1+</span></h3>
		<div><?php
			$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
			$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
			var_dump(array_diff_ukey($array1, $array2, function($k1, $k2) {
				echo "/ $k1 $k2 /";
				if ($k1 == $k2) { return 0; }
				return ($k1 > $k2) ? 1 : -1;
			}));
		?></div>
		
		
		
		<h3><code>array</code> array_diff(<code>array $array1, array $array2 [, array $...]</code>) <span class="badge">4.0.1+</span></h3>
		<div><?php
			$array1 = array("a" => "green", "red", "blue", "red");
			$array2 = array("b" => "green", "yellow", "red");
			var_dump(array_diff($array1, $array2));
		?></div>
		
		
		
		<h3><code>array</code> array_fill_keys(<code>array $keys, mixed $value</code>) <span class="badge">5.2+</span></h3>
		<div><?php
			$keys = array('foo', 5, 10, 'bar', 'x' => 'hello', []); // [] ==>> E_NOTICE
			var_dump(array_fill_keys($keys, 'banana'));
			var_dump(array_fill_keys($keys, []));
		?></div>
		
		
		
		<h3><code>array</code> array_fill(<code>int $start_index, int $num, mixed $value</code>) <span class="badge">4.2+</span></h3>
		<div><?php
			var_dump(array_fill(5, 6, 'banana'));
			var_dump(array_fill(-2, 4, 'pear'));
			var_dump(array_fill('a', 'z', 'pear')); // null -->> E_WARNING
		?></div>
		
		
		
		<h3><code>array</code> array_filter(<code>array $array [, callable $callback [, int $flag = 0]]</code>) <span class="badge">4.0.6+</span></h3>
		<div><?php
			$array1 = array("a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5);
			var_dump(array_filter($array1, function($var) {
				return ($var & 1); // odd ( impair )
//				return !($var & 1); // even ( pair )
			}));
		?></div>
		
		
		
		<h3><code>array</code> array_flip(<code>array $array</code>) <span class="badge">4+</span></h3>
		<div><?php
			$arr = array("a" => 1, "b" => 1, "c" => 2, 'd' => []); // ignored ==>> E_WARNING
			var_dump(array_flip($arr));
		?></div>
		
		
		
		<h3><code>array</code> array_intersect_assoc(<code>array $array1, array $array2 [, array $...]</code>) <span class="badge">4.3+</span></h3>
		<div><?php
			$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red"); // [0] = "red"
			$array2 = array("a" => "green", "b" => "yellow", "blue", "red"); // red ne ressort pas car [1] = "red"
//			$array2 = array("a" => "green", "b" => "yellow", "d" => "blue", "red"); // red ressort car [0] = "red"
			var_dump(array_intersect_assoc($array1, $array2));
		?></div>
		
		
		
		<h3><code>array</code> array_intersect_key(<code>array $array1, array $array2 [, array $...]</code>) <span class="badge">5.1+</span></h3>
		<div><?php
			$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4, []);
			$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8, []);
			var_dump(array_intersect_key($array1, $array2));
		?></div>
		
		
		
		<h3><code>array</code> array_intersect_uassoc(<code>array $array1, array $array2 [, array $...], callable $key_compare_func</code>) <span class="badge">5+</span></h3>
		<div><?php
			$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red"); // [] ==>> E_NOTICE
			$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
			var_dump(array_intersect_uassoc($array1, $array2, "strcasecmp"));
//			var_dump(array_intersect_assoc($array1, $array2));
		?></div>
		
		
		
		<h3><code>array</code> array_intersect_ukey(<code>array $array1, array $array2 [, array $...], callable $key_compare_func</code>) <span class="badge">5.1+</span></h3>
		<div><?php
			$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4, []);
			$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8, []);
			var_dump(array_intersect_ukey($array1, $array2, function($k1, $k2) {
				if ($k1 == $k2) { return 0; }
				return ($k1 > $k2 ? 1 : -1);
			}));
		?></div>
		
		
		
		<h3><code>array</code> array_intersect(<code>array $array1, array $array2 [, array $...]</code>) <span class="badge">4.0.1+</span></h3>
		<div><?php
			$array1 = array("a" => "green", "red", "blue"); // [] ==>> E_NOTICE
			$array2 = array("b" => "green", "yellow", "red");
			var_dump(array_intersect($array1, $array2));
		?></div>
		
		
		
		<h3><code>bool</code> array_key_exists(<code>mixed $key, array $array</code>) <span class="badge">4.0.7</span></h3>
		<div><?php
			$search_array = array('first' => null, 'second' => 4);
			var_dump(array_key_exists('first', $search_array)); // true
			echo '<p>Attention avec <code>isset()</code></p>';
			var_dump(isset($search_array['first'])); // false 
		?></div>
		
		
		
		<h3><code>array</code> array_keys(<code>array $array [, mixed $search_value [, bool $strict = false]]</code>) <span class="badge">4+</span></h3>
		<div><?php
			$array = array("color" => array("blue", "red", "green"),
			               "size"  => array("small", "medium", "large"));
			var_dump(array_keys($array));
			
			$array = array("blue", "red", "green", "blue", "blue");
			var_dump(array_keys($array, "blue"));
		?></div>
		
		
		
		<h3><code>array</code> array_map(<code>callable $callback, array $array1 [, array $...]</code>) <span class="badge">4.0.6+</span></h3>
		<div><?php
			$a = array(1, 2, 4, 8, 16);
			var_dump(array_map(function($n) {
				return $n * $n;
			}, $a));
		?></div>
		
		
		
		<h3><code>array</code> array_merge_recursive(<code>array $array1 [, array $...]</code>) <span class="badge">4.0.1+</span></h3>
		<div><?php
			$ar1 = array("color" => array("favorite" => "red"), 5);
			$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
			var_dump(array_merge_recursive($ar1, $ar2));
		?></div>
		
		
		
		<h3><code>array</code> array_merge(<code>array $array1 [, array $...]</code>) <span class="badge">4+</span></h3>
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
		
		
		
		<h3><code>bool</code> array_multisort(<code>array &amp;$array1 [, mixed $array1_sort_order = SORT_ASC [, mixed $array1_sort_flags = SORT_REGULAR [, mixed $...]]]</code>) <span class="badge">4+</span></h3>
		<div><?php
			$ar1 = array(10, 100, 100, 0);
			$ar2 = array(1, 3, 2, 4);
			var_dump(array_multisort($ar1, $ar2));
			var_dump($ar1, $ar2);
			echo '<hr/>';
			
			$ar1 = array(10, 100, 100, 0);
			var_dump(array_multisort($ar1, SORT_DESC), $ar1);
		?></div>
		
		
		
		<h3><code>array</code> array_pad(<code>array $array, int $size, mixed $value</code>) <span class="badge">4+</span></h3>
		<div><?php
			$input = array(12, 10, 9);

			var_dump(array_pad($input, 5, 0));
			var_dump(array_pad($input, -7, -1));
			var_dump(array_pad($input, 2, "noop"));
		?></div>
		
		
		
		<h3><code>mixed</code> array_pop(<code>array &amp;$array</code>) <span class="badge">4+</span></h3>
		<div><?php
			$stack = array("orange", "banana", "apple", "raspberry");
			var_dump(array_pop($stack), $stack);
			var_dump(array_shift($stack), $stack);
		?></div>
		
		
		
		<h3><code>mixed</code> array_product(<code>array $array</code>) <span class="badge">5.1+</span></h3>
		<div><?php
			var_dump(array_product([2,4,6])); // 48
			var_dump(array_product([])); // 1
			var_dump(array_product([2, '3x'])); // 6
			var_dump(array_product([2, 'x3'])); // 0
		?></div>
		
		
		
		<h3><code>int</code> array_push(<code>array &amp;$array, mixed $value1 [, mixed $...]</code>) <span class="badge">4+</span></h3>
		<div><?php
			// Has the same effect as:  $array[] = $var;
			$stack = array("orange", "banana");
			var_dump(array_push($stack, "apple", "raspberry"), $stack);
//			var_dump(array_unshift($stack, "hello"), $stack);
		?></div>
		
		
		
		<h3><code>mixed</code> array_rand(<code>array $array [, int $num = 1]</code>) <span class="badge">4+</span></h3>
		<div><?php
			$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
			$rand_keys = array_rand($input, 2);
			var_dump(
				$rand_keys,
				$input[$rand_keys[0]],
				$input[$rand_keys[1]]
			);
			
		?></div>
		
		
		
		<h3><code>mixed</code> array_reduce(<code>array $array, callable $callback [, mixed $initial = null]</code>) <span class="badge">4.0.5+</span></h3>
		<div><?php
			$array = array(1, 2, 3, 4, 5);
			var_dump(array_reduce($a, function($carry, $item) {
				$carry *= $item;
				return $carry;
			}, 10));
		?></div>
		
		
		
		<h3 class="text-danger"><code>array</code> array_replace_recursive(<code>array $array1, array $array2 [, array $...]</code>) &amp; array_replace() <span class="badge">5.3+</span></h3>
		<div><?php
			$base = array('citrus' => array( "orange") , 'berries' => array("blackberry", "raspberry"), );
			$replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));
			var_dump(array_replace_recursive($base, $replacements));
			var_dump(array_replace($base, $replacements));
		?></div>
		
		
		
		<h3><code>array</code> array_reverse(<code>array $array, [, bool $preserve_keys = false]</code>) <span class="badge">4+</span></h3>
		<div><?php
			$array = array("php", 4.0, array("green", "red"));
			var_dump(array_reverse($array));
			var_dump(array_reverse($array, true));
		?></div>
		
		
		
		<h3><code>mixed</code> array_search(<code>mixed $needle, array $haystack [, bool $strict = false]</code>) <span class="badge">4.0.5+</span></h3>
		<div><?php
			$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
			var_dump(array_search('green', $array)); // 2
			var_dump(array_search('yellow', $array)); // false
		?></div>
		
		
		
		<h3><code>mixed</code> array_shift(<code>array &amp; $array</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>array</code>array_slide(<code>array $array, int $offset [, int $length = null [, bool $preserve_keys = false]]</code>) <span class="badge">4+</span></h3>
		<div><?php
			$input = array("a", "b", "c", "d", "e");
			var_dump(array_slice($input, 2));      // returns "c", "d", and "e"
			var_dump(array_slice($input, -2, 1));  // returns "d"
			var_dump(array_slice($input, 0, 3));   // returns "a", "b", and "c"
			
			var_dump(array_slice($input, 2, -1));  //  returns "c", "d"
			var_dump(array_slice($input, 2, -1, true));
		?></div>
		
		
		
		<h3><code>array</code> array_splice(<code>array &$input, int $offset [, int $length [, mixed $replacement = array()]]</code>) <span class="badge">4+</span></h3>
		<div><?php
			$input = array("red", "green", "blue", "yellow");
			array_splice($input, 2);
			var_dump($input);
			// $input is now array("red", "green")
			
			$input = array("red", "green", "blue", "yellow");
			array_splice($input, 1, -1);
			var_dump($input);
			// $input is now array("red", "yellow")
			
			$input = array("red", "green", "blue", "yellow");
			array_splice($input, 1, count($input), "orange");
			var_dump($input);
			// $input is now array("red", "orange")
			
			$input = array("red", "green", "blue", "yellow");
			array_splice($input, -1, 2, array("black", "maroon"));
			var_dump($input);
			// $input is now array("red", "green", "blue", "black", "maroon")
			
			$input = array("red", "green", "blue", "yellow");
			array_splice($input, 3, 0, "purple");
			var_dump($input);
		?></div>
		
		
		
		<h3><code>number</code> array_sum(<code>array $array</code>) <span class="badge">4.0.4+</span></h3>
		<div><?php
			$a = array(2, 4, 6, 8);
			var_dump(array_sum($a));
		?></div>
		
		
		
		<h3><code>array</code> array_udiff_assoc(<code>array $array1, array $array2 [, array $...], callable $value_compare_func</code>) <span class="badge">5+</span></h3>
		<div><?php
			class cr {
				private $priv_member;
				function cr($val) {
					$this->priv_member = $val;
				}
				static function comp_func_cr($a, $b) {
					if ($a->priv_member === $b->priv_member) return 0;
					return ($a->priv_member > $b->priv_member)? 1:-1;
				}
			}
			$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1=> new cr(4), 2 => new cr(-15),);
			$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1=> new cr(4), 2 => new cr(-15),);
			$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
			var_dump($result);
		?></div>
		
		
		
		<h3><code>array</code> array_udiff_uassoc(<code>array $array1, array $array2 [, array $...], callable $value_compare_func, callable $key_compare_func</code>) <span class="badge">5+</span></h3>
		
		
		
		<h3><code>array</code> array_udiff(<code>array $array1, array $array2 [, array $...], callable $value_compare_func</code>) <span class="badge">5+</span></h3>
		
		
		
		<h3><code>array</code> array_uintersect_assoc(<code>array $array1, array $array2 [, array $...], callable $value_compare_func</code>) <span class="badge">5+</span></h3>
		
		
		
		<h3><code>array</code> array_uintersect_uassoc(<code>array $array1, array $array2 [, array $...], callable $value_compare_func, callable $key_compare_func</code>) <span class="badge">5+</span></h3>
		
		
		
		<h3><code>array</code> array_uintersect(<code>array $array1, array $array2 [, array $...], callable $value_compare_func</code>) <span class="badge">5+</span></h3>
		
		
		
		<h3><code>array</code> array_unique(<code>array $array [, int $sort_falgs = SORT_STRING]</code>) <span class="badge">4.0.1+</span></h3>
		<div><?php
			$input = [
				'a' => 'red',
				'1' => 'green',
				'b' => 'blue',
				'2' => 'red',
				'blue' => 'blue',
			];
			var_dump(array_unique($input));
			$input = [4, '4', '3', 4, 3];
			var_dump(array_unique($input)); // SORT_STRING
			var_dump(array_unique($input, SORT_REGULAR));
			var_dump(array_unique($input, SORT_NUMERIC));
		?></div>
		
		
		
		<h3><code>int</code> array_unshift(<code>array &amp;$array, mixed $value1 [, mixed $...]</code>) <span class="badge">4+</span></h3>
		<div><?php
			$queue = ['orange', 'banana'];
			var_dump(array_unshift($queue, 'apple', 'raspberry'), $queue);
//			var_dump(array_push($queue, 'push'), $queue);
		?></div>
		
		
		
		<h3><code>array</code> array_values(<code>array $array</code>) <span class="badge">4+</span></h3>
		<div><?php
			$array = ['size' => 'xl', 'color' => 'gold'];
			var_dump(array_values($array));
		?></div>
		
		
		
		<h3><code>bool</code> array_walk_recursive(<code>array &$array, callable $callback [, mixed $userdata = null]</code>) <span class="badge">5+</span></h3>
		<div><?php
			$sweet = ['a' => 'apple', 'b' => 'banana'];
			$fruits = ['sweet' => $sweet, 'sour' => 'lemon'];
			function test_print($item, $key, $k3) {
				echo "Cl&eacute;: $key = $item ($k3)<br/>";
			}
			array_walk_recursive($fruits, 'test_print', date('d'));
		?></div>
		
		
		
		<h3><code>bool</code> array_walk(<code>array &amp;$array, callable $callback [, mixed $userdata = null]</code>) <span class="badge">4+</span></h3>
		<div><?php
			$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
			function test_alter(&$item1, $key, $prefix) {
				$item1 = "$prefix: $item1";
			}
			
			function test_print2($item2, $key) {
				echo "$key. $item2<br />\n";
			}
			
			echo "Avant ...:\n";
			array_walk($fruits, 'test_print2');
			
			array_walk($fruits, 'test_alter', 'fruit');
			echo "... et apr&egrave;s :\n";
			
			array_walk($fruits, 'test_print2');
		?></div>
		
		
		
		<h3><code>array</code> array(<code>mixed $...</code>) <span class="badge">4+</span> [] <span class="badge">5.4+</span></h3>
		
		
		
		<h3><code>bool</code> arsort(<code>array &amp;$array [, int $sort_flags = SORT_REGULAR]</code>) <span class="badge">4+</span></h3>
		<div><?php
			$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
			var_dump(arsort($fruits), $fruits);
		?></div>
		
		
		
		<h3><code>bool</code> asort(<code>array &amp;$array [, int $sort_flags = SORT_REGULAR]</code>) <span class="badge">4+</span></h3>
		<div><?php
			$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
			var_dump(asort($fruits), $fruits);
		?></div>
		
		
		
		<h3><code>array</code> compact(<code>mixed $varname1 [, mixed $...]</code>) <span class="badge">4+</span></h3>
		<div><?php
			$city  = "San Francisco";
			$state = "CA";
			$event = "SIGGRAPH";
			
			$location_vars = array("city", "state");
			
			var_dump(compact("event", "nothing_here", $location_vars));
			var_dump(compact("event", "nothing_here", 'city'));
		?></div>
		
		
		
		<h3><code>int</code> count(<code>mixed $array_or_countable [, int $mode = COUNT_NORMAL]</code>) <span class="badge">4+</span> &amp; Countable <span class="badge">5.1+</span></h3>
		<div><?php
			$food = ['fruits' => ['orange', 'banana'],
					'viggie',
					];
			var_dump(count($food), count($food, COUNT_RECURSIVE));
		?></div>
		
		
		
		<h3><code>mixed</code> current(<code>array &amp;$array</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>array</code> each(<code>array &amp;$array</code>) <span class="badge">4+</span></h3>
		<div><?php
			$fruit = array('a' => 'apple', 'b' => 'banana', 'c' => 'cranberry');
			reset($fruit);
//			end($fruit);
			while (list($key, $val) = each($fruit)) {
				echo "$key => $val<br/>";
			}
		?></div>
		
		
		
		<h3><code>mixed</code> end(<code>array &amp;$array</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>int</code> extract(<code>array &amp;$array [, int $flags = EXTR_OVERWRITE [, string $prefix = null]]</code>) <span class="badge">4+</span></h3>
		<div><?php
			$size = "large";
			$var_array = array(
				"color" => "blue",
				"size"  => "medium",
				"shape" => "sphere");
			extract($var_array, EXTR_PREFIX_SAME, "wddx");
			echo "$color, $size, $shape, $wddx_size\n";
			
			//	EXTR_OVERWRITE*
			//	EXTR_SKIP
			//	EXTR_PREFIX_SAME
			//	EXTR_PREFIX_ALL
			//	EXTR_PREFIX_INVALID
			//	EXTR_IF_EXISTS
			//	EXTR_PREFIX_IF_EXISTS
			//	EXTR_REFS
		?></div>
		
		
		
		<h3><code>bool</code> in_array(<code>mixed $needle, array $haystack [, bool $strict = false]</code>) <span class="badge">4+</span></h3>
		<div><?php
			$os = ['mac', 'nt', 'linux'];
			var_dump($os);
			var_dump(in_array('mac', $os), in_array('Mac', $os));
			var_dump(in_array('win', $os));
			$v = ['1.10', 12.4, 1.13];
			var_dump(
				$v,
				in_array('12.4', $v),
				in_array('12.4', $v, true)
			);
		?></div>
		
		
		
		<h3>key_exists() <span class="badge">4.0.6+</span> &raquo; array_key_exists()</h3>
		
		
		
		<h3><code>mixed</code> key(<code>array &amp;$array</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> krsort(<code>array &amp;$array [, int $sort_flags = SORT_REGULAR]</code>) <span class="badge">4+</span></h3>
		<div><?php
			$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
			var_dump(krsort($fruits), $fruits);
		?></div>
		
		
		
		<h3><code>bool</code> ksort(<code>array &amp;$array [, int $sort_flags = SORT_REGULAR]</code>) <span class="badge">4+</span></h3>
		<div><?php
			$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
			var_dump(ksort($fruits), $fruits);
		?></div>
		
		
		
		<h3><code>array</code> list(<code>mixed $var1 [, mixed $...]</code>) <span class="badge">4+</span></h3>
		<div><?php
			$info = array('coffee', 'brown', 'caffeine');
			list($drink, , $power) = $info;
			var_dump("$drink has $power.");
		?></div>
		
		
		
		<h3><code>bool</code> natcasesort(<code>array &amp;$array</code>) <span class="badge">4+</span></h3>
		<div><?php
			$array1 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');
			var_dump(natcasesort($array1), $array1);
		?></div>
		
		
		
		<h3><code>bool</code> natsort(<code>array &amp;$array</code>) <span class="badge">4+</span></h3>
		<div><?php
			$negative = array('-5','3','-2','0','-1000','09','1');
			var_dump($negative, natsort($negative), $negative);
		?></div>
		
		
		
		<h3><code>mixed</code> next(<code>array &amp;$array</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3>pos() <span class="badge">4+</span> &raquo; current()</h3>
		
		
		
		<h3><code>mixed</code> prev(<code>array &amp;$array</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>array</code> range(<code>mixed $start, mixed $send [, number $step = 1]</code>) <span class="badge">4+</span></h3>
		<div><?php
			var_dump(
				range(0, 101, 10),
				range('i', 'a'),
				range('i', 'a', 2)
			);
		?></div>
		
		
		
		<h3><code>mixed</code> reset(<code>array &amp;$array</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> rsort(<code>array &amp;$array [, int $sort_flags = SORT_REGULAR]</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> shuffle(<code>array &amp;$array</code>) <span class="badge">4+</span></h3>
		<div><?php
			$numbers = range(10, 20);
			var_dump(shuffle($numbers), $numbers);
		?></div>
		
		
		
		<h3>sizeof() <span class="badge">4+</span> &raquo; count()</h3>
		
		
		
		<h3><code>bool</code> sort(<code>array &amp;$array [, int $sort_flags = SORT_REGULAR]</code>) <span class="badge">4+</span></h3>
		<div><?php
			$fruits = array("lemon", "orange", "banana", "apple");
			var_dump(sort($fruits), $fruits);
		?></div>
		<pre>
SORT_REGULAR
SORT_NUMERIC
SORT_STRING
SORT_LOCALE_STRING <span class="badge">5.0.2+</span>
<strong class="text-danger">SORT_NATURAL</strong> <span class="badge">5.4+</span>
<strong class="text-danger">SORT_FLAG_CASE</strong> <span class="badge">5.4+</span>
</pre>
		
		
		
		<h3><code>bool</code> uasort(<code>array &amp;$array, callable $value_compare_func</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> uksort(<code>array &amp;$array, callable $key_compare_func</code>) <span class="badge">4+</span></h3>
		
		
		
		<h3><code>bool</code> usort(<code>array &amp;$array, callable $value_compare_func</code>) <span class="badge">4+</span></h3>
		
		
		
	</div>

<body>
</html>