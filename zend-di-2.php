<?php

$config = new Zend\Config\Ini('di.ini');
$diConfig = new Zend\Di\Configuration($config->di);

$di = new Zend\Di\DependencyInjector($diConfig);

$contact = $di->get('contact');