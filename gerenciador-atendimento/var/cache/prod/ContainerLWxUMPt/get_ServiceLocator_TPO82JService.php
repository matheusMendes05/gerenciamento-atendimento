<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.tPO8_2J' shared service.

return $this->privates['.service_locator.tPO8_2J'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'client' => array('privates', '.errored..service_locator.tPO8_2J.App\\Entity\\OAuthClient', NULL, 'Cannot autowire service ".service_locator.tPO8_2J": it references class "App\\Entity\\OAuthClient" but no such service exists.'),
));
