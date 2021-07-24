<?php

require_once('PRIVATE_config.php');

$t = file_get_contents(KWYNN_INIT_CSV_PATH);
$l = strlen($t);

$a10 = explode("\n", $t);

$biga = [];
$i = 0;
foreach($a10 as $r) {
	$a = str_getcsv($r);
	if (!isset($a[0]) || !$a[0]) continue;
	$biga[$i] = $a;
	$i++;
	continue;
}

exit(0);
