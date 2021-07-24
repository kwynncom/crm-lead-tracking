<?php

require_once('PRIVATE_config.php');


function validUserOrDie() {
	$path = getUserPath();
	
	require_once($path . 'users.php');
	
	$ui = users::getUInfo();
	$vus = validUsers();
	
	foreach($vus as $vu) {
		
		$fs = 0;
		$valid = 0;
		
		foreach($vu as $k => $v) {
			$fs++;
			if ($vu[$k] !== $ui[$k]) continue;
			$valid++;
		}
		
		if ($valid === $fs) return TRUE;
	}
		
	kwas(FALSE, 'bad user');
	
}