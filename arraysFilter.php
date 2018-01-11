<?php
 $array = [
 	'name' =>[
 	'your name is required',
 	'your name is cannot  contain any numbers',
 	// 'key'=>['faals']
 	],
 	'dob' =>[
 	'your date of birth is required'
 	],
 	'password' =>[
 		'your password must be 6 character or moere',
 		'your password isn\'t strong enough '
 	],
 	'd7rga d7rga',

 ];	

 function flatten_array(array $items, array $flattened = []){
	foreach ($items as $item) {
		// var_dump($item);
		if (is_array($item)) {
	 		$flattened = flatten_array($item,$flattened);
	 		continue;
			}
	 		$flattened[] = $item;
	 	}
	 	return $flattened;
 }
 echo '<pre>';
  var_dump(flatten_array($array));
?>
