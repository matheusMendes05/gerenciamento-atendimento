<?php

/*
 * This file is part of the Novo SGA project.
 *
 * (c) Rogerio Lino <rogeriolino@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller\Api;

use Symfony\Component\Routing\Annotation\Route;

/**
 * ServicosController
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 *
 * @Route("/api/servicos")
 */
class ServicosController extends ApiCrudController
{
    use Actions\GetTrait,
        Actions\FindTrait,
        Actions\PostTrait,
        Actions\PutTrait,
        Actions\DeleteTrait;
    
    public function getEntityName()
    {
        return \Novosga\Entity\Servico::class;
    }
}
