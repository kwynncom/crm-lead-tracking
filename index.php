<?php

require_once('csv.php');

$G_BIGLA_JSON = json_encode(getCSVA());

require_once('template.php');
