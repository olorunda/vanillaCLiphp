<?php


require_once 'vendor/autoload.php';
require_once 'config/bootstrap.php';

if (PHP_SAPI !== 'cli') {
    exit("Run from CLI only!\n");
}

$class_name="\\App\\Console\\$argv[1]";
$method_name=$argv[2];

if(!empty($argv[3])){
    echo  (new $class_name())->$method_name($argv[3]);
    return;
}

(new $class_name())->$method_name();
