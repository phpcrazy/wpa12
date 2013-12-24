<?php 

define('DD', __DIR__);
require DD . "/src/autoload.php";

$sitetitle = Config::get('site_title');
echo $sitetitle . "<br />";
$foobar = Config::get('foo.bar.moo');
echo $foobar;

?>