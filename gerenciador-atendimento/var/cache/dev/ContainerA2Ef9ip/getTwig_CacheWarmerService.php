<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.cache_warmer' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bundle\\CacheWarmer\\TemplateCacheCacheWarmer.php';

return $this->privates['twig.cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer(($this->privates['.service_locator.lSIKWsr'] ?? $this->load('get_ServiceLocator_LSIKWsrService.php'))->withContext('twig.cache_warmer', $this), ($this->privates['templating.finder'] ?? $this->load('getTemplating_FinderService.php')), array(($this->targetDirs[3].'/templates') => NULL, ($this->targetDirs[3].'\\vendor\\symfony\\twig-bridge/Resources/views/Form') => NULL));
