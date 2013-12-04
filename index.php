<?php 

$num1 = 45;
$num2 = 65;
$sum = $num1 + $num2;
gettype($num1);
gettype($num2);


$name = "Maung Maung Aung";
$name2 = "Aung Aung, Maung Maung, Hla Hla";

/*
how to determine lenth of string in php
how to print separated character in php
how to determine captical letters in string in php
how to captitalize letters in php
how to replace string in php
how to split comma sperated string in php
*/
echo strlen($name) . "<br />"; // built-in function
$count = strlen($name);
$upper = 0;
for($i = 0; $i < $count; $i++) {
	echo $name{$i} . "<br />";
	if(ctype_upper($name{$i})) {
		$upper += 1;
	}
}

echo $upper . "<br />";

$another = strtoupper($name);
echo $another . "<br />";

$str = str_replace("Aung", "Wunn", $name, $count);
echo $str . "<br />";
echo $count . "<br />";
$exp = explode(" ", $name);
$exp2 = explode(',', $name2);

var_dump($exp);
var_dump($exp2);


 ?>