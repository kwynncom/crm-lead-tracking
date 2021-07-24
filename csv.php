<?php

require_once('PRIVATE_config.php');

$t = file_get_contents(KWYNN_INIT_CSV_PATH);
$l = strlen($t);

$a10 = explode("\n", $t);

foreach($a10 as $r) {
	$a = str_getcsv($r);
	continue;
}
