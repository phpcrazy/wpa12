<?php


$students = ['Maung Maung', 'Aung Aung', 'Hla Hla', 'Mya Mya'];
$student2=['Tun Tun','Hla Hla','Myo Myo','Zaw Zaw'];
foreach($students as $student) {
	echo $student . "<br />";	
}
var_dump($students);
asort($students);
var_dump($students);

array_push($students, "Zaw Moe");
var_dump($students);

$coun=count($students);
var_dump($coun);

$key=array_search('Aung Aung', $students);
$students[$key]="Paung Paung";
var_dump($students);

$cstudent=array_merge($students,$student2);
var_dump($cstudent);

$imp=implode(",", $students);
var_dump($imp);

$interset=array_intersect($students, $student2);
var_dump($interset);

$result=array_diff($students, $student2);
var_dump($result);

$delete=array_search("Paung Paung", $students);
unset($students[$delete]);

ksort($students);
var_dump($students);

$newstudents=array();
foreach($students as $student)
{
	var_dump($student);
	$newstudents[]=$student;
}
var_dump($newstudents);
/*
How to sort array in php
How to Add new in array in php
How to Count array in php
how to search in array in php
how to replace array in php
how to merge arrays in php
how to convert array into string in php
how to find same value in php
how to remove value in array in php
how to unset key value in array in php
*/



?>
