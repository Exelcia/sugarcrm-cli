<?php

use Exelcia\SugarCLI\Application;

$application = new Application();
$config      = require(__DIR__ . '/../config/config.php');

$application->addFromArray($config['commands']);

return $application;
