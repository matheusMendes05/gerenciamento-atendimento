<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.9T3uhQd' shared service.

return $this->privates['.service_locator.9T3uhQd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'filaService' => array('services', 'Novosga\\Service\\FilaService', 'getFilaServiceService.php', true),
    'servicoService' => array('services', 'Novosga\\Service\\ServicoService', 'getServicoServiceService.php', true),
));
