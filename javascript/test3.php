<?php

$fruits = array('apple' => 'first', 'orange' => 'second', 'banana' => 'third', 'watermelon' => 'fourth');

$search = array_search('second', $fruits);

foreach($fruits as $fruit){
	echo $fruit."<br>";
}

if($search){
	echo "Needle found!";
}

?>