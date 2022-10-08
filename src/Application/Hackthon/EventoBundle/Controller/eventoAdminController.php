<?php
namespace App\Application\Hackthon\EventoBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

/**
 * evento Admin controller.
 *
 * @Route("/admin/hackthon/evento/evento")
 */
class eventoAdminController extends CRUDController
{

    public function getBundleName()
    {
        return 'ApplicationHackthonEventoBundle';
    }

    public function getEntityName()
    {
        return 'evento';
    }

    public function getFormType()
    {
        return 'App\Application\Hackthon\EventoBundle\Form\eventoType';
    }
}

