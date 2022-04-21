<?php

<<<<<<< HEAD
/**
 * Permet de modifier la configuration de PHP
 * @see https://www.php.net/manual/en/function.ini-set.php
 */
ini_set("display_errors", 1);

/**
 * Permet d'éviter que les erreurs, avertissements et autres soient masqués
 * @see https://www.php.net/manual/en/function.error-reporting.php
 */
error_reporting(E_ALL);

/**
 * La route ré-écrite via la règle de ré-écriture d'URL du fichier .htaccess
 * @see https://www.php.net/manual/en/language.operators.comparison.php
 * @see https://www.php.net/manual/en/function.isset.php
 */
=======
ini_set("display_errors",1);

error_reporting(E_ALL);

>>>>>>> development
$route = isset($_REQUEST["route"]) ? $_REQUEST["route"] : "undefined";

echo $route;
