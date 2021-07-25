<?php

require_once('/opt/kwynn/kwutils.php');

function getUserPath() {
	if (isKwDev()) return __DIR__ . '/../users/';
	if (isAWS  ()) return __DIR__ . '/../../../20/07/users/';
	
}
