<?php

function sort_array($data__)
{
	$array_utama= array();
	for ($i=0; $i < count($data__); $i++) { 
		asort($data__[$i]);
		$array_utama[$i] = $data__[$i]; 
	}

	return $array_utama;
}

$data = array(
	array("a","g","b","q","c"),
	array("a","g","b","q","c")
);
print_r(sort_array($data));
?>