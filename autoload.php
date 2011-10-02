<?php

require_once 'Zend/Loader/AutoloaderFactory.php';
$o = array(
    'Zend\Loader\StandardAutoloader' => array(
        // include_path autoloader
        array('' => null),
    ),
    'Zend\Loader\ClassMapAutoloader' => array(
        // ClassMap autoloading
        '/path/to/library/Zend/autoload_classmap.php'
    ),
);
Zend\Loader\AutoloaderFactory::factory($o);