<?php

define('DD', __DIR__ . '/../'); 
require DD . '/vendor/autoload.php';

/* $sitetitle = Config::get('site_title');
echo $sitetitle . "<br />";
$foobar = Config::get('foo.bar.moo');
echo $foobar;*/

$data['site_title']	= Config::get('site_title');
$data['students'] = require DD . "/app/models/students_mla.php";
View::make('blog');


?>