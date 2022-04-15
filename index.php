<?php

ini_set("display_errors", 1);

error_reporting(E_ALL);

$route = isset($_REQUEST["route"]) ? $_REQUEST["route"] : "undefined";

echo $route;
