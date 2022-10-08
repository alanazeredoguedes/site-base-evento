<?php
namespace App\Application\Hackthon\DiaEventoBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

/**
 * DiaEvento Admin controller.
 *
 * @Route("/admin/hackthon/diaevento/diaevento")
 */
class DiaEventoAdminController extends CRUDController
{

    public function getBundleName()
    {
        return 'ApplicationHackthonDiaEventoBundle';
    }

    public function getEntityName()
    {
        return 'DiaEvento';
    }

    public function getFormType()
    {
        return 'App\Application\Hackthon\DiaEventoBundle\Form\DiaEventoType';
    }
}

