<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_oauth_server.authorize.form.handler.default' shared service.

include_once $this->targetDirs[3].'\\vendor\\novosga\\oauth-server-bundle\\Form\\Handler\\AuthorizeFormHandler.php';

return $this->services['fos_oauth_server.authorize.form.handler.default'] = new \FOS\OAuthServerBundle\Form\Handler\AuthorizeFormHandler(($this->services['fos_oauth_server.authorize.form'] ?? $this->load('getFosOauthServer_Authorize_FormService.php')), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
