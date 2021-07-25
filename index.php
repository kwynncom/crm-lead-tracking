<?php

require_once('config.php');
require_once('users.php');

validUserOrDie();

require_once('csv.php');

$G_BIGLA_JSON = json_encode(getCSVA());

$G_UPATH = getUserPath();

require_once($G_UPATH  . 'users.php');
require_once('template.php');


