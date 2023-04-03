<?php
$scan = preg_grep('/^([^.])/', scandir("images/"));
//shuffle($scan);
//$r = mt_rand(2, count($scan));
//print_r($scan);
//echo $r;
$i = array_rand($scan);

$selectedBg = $scan[$i];

echo $selectedBg;
?>


