<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Api\LocaisController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\Controller.php';
include_once $this->targetDirs[3].'\\src\\Controller\\Api\\ApiControllerBase.php';
include_once $this->targetDirs[3].'\\src\\Controller\\Api\\ApiCrudController.php';
include_once $this->targetDirs[3].'\\src\\Controller\\Api\\Actions\\GetTrait.php';
include_once $this->targetDirs[3].'\\src\\Controller\\Api\\Actions\\FindTrait.php';
include_once $this->targetDirs[3].'\\src\\Controller\\Api\\Actions\\PostTrait.php';
include_once $this->targetDirs[3].'\\src\\Controller\\Api\\Actions\\PutTrait.php';
include_once $this->targetDirs[3].'\\src\\Controller\\Api\\Actions\\DeleteTrait.php';
include_once $this->targetDirs[3].'\\src\\Controller\\Api\\LocaisController.php';

return $this->services['App\Controller\Api\LocaisController'] = new \App\Controller\Api\LocaisController(($this->services['translator'] ?? $this->getTranslatorService()), $this->targetDirs[3]);
