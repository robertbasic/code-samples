<?php

echo $this->headLink();

/**
 * Zend_View::__call
 *  Zend_View::getHelper
 *   Zend_View::_getPlugin
 *    Zend_Loader_PluginLoader::load
 *     Zend_Loader::isReadable
 *      call_user_func
 *       Zend_Loader::loadClass
 *        Zend_Loader::loadFile
 *         include_once
 *     Instantiate helper
 * call_user_func_array
 *  Return helper instance
 *   Call method on helper
 */