<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Admin\BlogController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/Admin/BlogController.php';

$this->services['App\\Controller\\Admin\\BlogController'] = $instance = new \App\Controller\Admin\BlogController();

$instance->setContainer(($this->privates['.service_locator.SCCXfzM'] ?? $this->load('get_ServiceLocator_SCCXfzMService.php'))->withContext('App\\Controller\\Admin\\BlogController', $this));

return $instance;
