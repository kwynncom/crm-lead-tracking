<?php

require_once('PRIVATE_config.php');

function getCSVA() {

	$t = file_get_contents(KWYNN_INIT_CSV_PATH);
	$l = strlen($t);

	$a10 = explode("\n", $t);

	$biga = [];
	$i = 0;
	foreach($a10 as $r) {
		$a = str_getcsv($r);
		if (!isset($a[0])) continue;
		$u = $a[0];
		if (!$u || !is_string($u));
		if (strpos($u, 'http') === false) continue;
		$biga[$i] = $a;
		$i++;
		continue;
	}

	$cnt = count($biga);
	return $biga;

}
