<?php

ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);

require_once 'autoload.php';

use api\WeatherQuery;

WeatherQuery::query( '上海' );
echo "<br>";
WeatherQuery::test( '林家河' );