<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_oauth_server.refresh_token_manager.default' shared service.

include_once $this->targetDirs[3].'\\vendor\\novosga\\oauth-server-bundle\\Model\\TokenManagerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\novosga\\oauth-server-bundle\\Model\\TokenManager.php';
include_once $this->targetDirs[3].'\\vendor\\novosga\\oauth-server-bundle\\Entity\\TokenManager.php';
include_once $this->targetDirs[3].'\\vendor\\novosga\\oauth-server-bundle\\Model\\RefreshTokenManagerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\novosga\\oauth-server-bundle\\Entity\\RefreshTokenManager.php';

return $this->services['fos_oauth_server.refresh_token_manager.default'] = new \FOS\OAuthServerBundle\Entity\RefreshTokenManager(($this->privates['fos_oauth_server.entity_manager'] ?? $this->load('getFosOauthServer_EntityManagerService.php')), 'App\\Entity\\OAuthRefreshToken');
