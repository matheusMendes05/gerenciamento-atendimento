<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'serializer.mapping.class_metadata_factory' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Mapping\\Factory\\ClassResolverTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Mapping\\Factory\\ClassMetadataFactory.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Mapping\\Loader\\LoaderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Mapping\\Loader\\LoaderChain.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Mapping\\Loader\\AnnotationLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Mapping\\Loader\\FileLoader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Mapping\\Loader\\YamlFileLoader.php';

return $this->privates['serializer.mapping.class_metadata_factory'] = new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService())), 1 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'\\config\\serializer\\app\\Entity.NovaSenha.yml')), 2 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'\\config\\serializer\\core\\Entity.AbstractAtendimento.yml')), 3 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'\\config\\serializer\\core\\Entity.AbstractAtendimentoCodificado.yml')), 4 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'\\config\\serializer\\core\\Entity.Agendamento.yml')), 5 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'\\config\\serializer\\core\\Entity.Atendimento.yml')), 6 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'\\config\\serializer\\core\\Entity.AtendimentoCodificado.yml')), 7 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'\\config\\serializer\\core\\Entity.AtendimentoCodificadoHistorico.yml')), 8 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'\\config\\serializer\\core\\Entity.AtendimentoHistorico.yml')), 9 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'\\config\\serializer\\core\\Entity.Cliente.yml')), 10 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'\\config\\serializer\\core\\Entity.Departamento.yml')), 11 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'\\config\\serializer\\core\\Entity.Local.yml')), 12 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'\\config\\serializer\\core\\Entity.Lotacao.yml')), 13 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'\\config\\serializer\\core\\Entity.Perfil.yml')), 14 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'\\config\\serializer\\core\\Entity.Prioridade.yml')), 15 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'\\config\\serializer\\core\\Entity.Servico.yml')), 16 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'\\config\\serializer\\core\\Entity.Unidade.yml')), 17 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[3].'\\config\\serializer\\core\\Entity.Usuario.yml')))), NULL);
