<?php
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require(__DIR__ . '/../vendor/autoload.php');
} else {
    #Composer autoload
    require(__DIR__ . '/../../../vendor/autoload.php');
}
