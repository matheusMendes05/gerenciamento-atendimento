<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Command/DebugCommand.php';

$this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->load('getForm_RegistryService.php')), array(0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form\\Api', 2 => 'App\\Form', 3 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 4 => 'FOS\\OAuthServerBundle\\Form\\Type', 5 => 'Novosga\\ReportsBundle\\Form'), array(0 => 'App\\Form\\Api\\AgendamentoType', 1 => 'App\\Form\\ClienteType', 2 => 'App\\Form\\DepartamentoType', 3 => 'App\\Form\\LocalType', 4 => 'App\\Form\\PerfilType', 5 => 'App\\Form\\PrioridadeType', 6 => 'App\\Form\\ProfileType', 7 => 'App\\Form\\ServicoType', 8 => 'App\\Form\\UnidadeType', 9 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 10 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 11 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 12 => 'FOS\\OAuthServerBundle\\Form\\Type\\AuthorizeFormType', 13 => 'Novosga\\ReportsBundle\\Form\\ChartType', 14 => 'Novosga\\ReportsBundle\\Form\\ReportType'), array(0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'), array(0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'));

$instance->setName('debug:form');

return $instance;
