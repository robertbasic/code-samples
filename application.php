<?php

/**
 * Setup autoloader
 * include application config
 * Zend\Loader\ModuleAutoloader::registerPaths
 * Zend\Loader\ModuleAutoloader::register
 * Zend\Module\Manager::loadModules
 *     Foo\Module::init
 *   Zend\Module\Manager\mergeModuleConfig
 * Bootstrap::bootstrap
 *   Bootstrap::setupLocator
 *   Bootstrap::setupRoutes
 *   Bootstrap::setupEvents
 * Zend\Mvc\Application::run
 *   Zend\Mvc\Application::events
 *     Zend\Mvc\Application::attachDefaultListeners
 *   Zend\Mvc\Application::route
 *     Router\SimpleRouteStack::match
 *   Zend\Mvc\Application::dispatch
 *     Zend\Mvc\Controller\ActionController::dispatch
 *     Zend\Mvc\Controller\ActionController::execute
 *       Foo\Controller\FooController::barAction
 * View\Listener::renderView
 *   Zend\View\PhpRenderer::render
 * View\Listener::renderLayout
 *   Zend\View\PhpRenderer::render
 */