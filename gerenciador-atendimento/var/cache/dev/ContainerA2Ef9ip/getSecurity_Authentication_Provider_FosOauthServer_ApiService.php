<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.fos_oauth_server.api' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\Authentication\\Provider\\AuthenticationProviderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\novosga\\oauth-server-bundle\\Security\\Authentication\\Provider\\OAuthProvider.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\User\\UserCheckerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\User\\UserChecker.php';

return $this->privates['security.authentication.provider.fos_oauth_server.api'] = new \FOS\OAuthServerBundle\Security\Authentication\Provider\OAuthProvider(($this->privates['App\Security\UserProvider'] ?? $this->load('getUserProviderService.php')), ($this->services['fos_oauth_server.server'] ?? $this->load('getFosOauthServer_ServerService.php')), ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())));
