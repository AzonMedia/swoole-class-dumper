<?php

use Azonmedia\Reflection\ReflectionClass;

require_once('./vendor/autoload.php');


$classes = get_declared_classes();
$path_prefix = './classes/';
if (!file_exists($path_prefix)) {
    mkdir($path_prefix);
} elseif (!is_dir($path_prefix)) {
    exit('The specified path to dump the classes is not a directory.');
}

foreach ($classes as $class) {
    if (stripos($class, 'swoole') !== 0) {
        continue;
    }
    if (strpos($class,'_') !== FALSE) {
        //this is an alias - these can be added in a separate file
        continue;
    }
    $file_path = $path_prefix . str_replace('\\', '_', $class) . '.php';
    $RClass = new ReflectionClass($class);
    $file_content = $RClass->getClassStructure();
    file_put_contents($file_path, $file_content);
}
