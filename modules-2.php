<?php

class Module {

    public function init(Manager $moduleManager) {
        $this->initAutoloader();
    }

    public function initAutoloader() {
        AutoloaderFactory::factory(array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            )
        ));
    }

    public function getConfig($env = null) {
        return new Config(include __DIR__ . '/configs/module.config.php');
    }

}