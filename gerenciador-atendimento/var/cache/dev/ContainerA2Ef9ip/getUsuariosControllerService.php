<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Api\UsuariosController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\Controller.php';
include_once $this->targetDirs[3].'\\src\\Controller\\Api\\ApiControllerBase.php';
include_once $this->targetDirs[3].'\\src\\Controller\\Api\\ApiCrudController.php';
include_once $this->targetDirs[3].'\\src\\Controller\\Api\\Actions\\GetTrait.php';
include_once $this->targetDirs[3].'\\src\\Controller\\Api\\Actions\\FindTrait.php';
include_once $this->targetDirs[3].'\\src\\Controller\\Api\\UsuariosController.php';

return $this->services['App\Controller\Api\UsuariosController'] = new \App\Controller\Api\UsuariosController(($this->services['translator'] ?? $this->getTranslatorService()), $this->targetDirs[3]);
