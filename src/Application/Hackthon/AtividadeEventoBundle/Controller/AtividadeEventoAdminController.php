<?php
namespace App\Application\Hackthon\AtividadeEventoBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

/**
 * AtividadeEvento Admin controller.
 *
 * @Route("/admin/hackthon/atividadeevento/atividadeevento")
 */
class AtividadeEventoAdminController extends CRUDController
{

    public function getBundleName()
    {
        return 'ApplicationHackthonAtividadeEventoBundle';
    }

    public function getEntityName()
    {
        return 'AtividadeEvento';
    }

    public function getFormType()
    {
        return 'App\Application\Hackthon\AtividadeEventoBundle\Form\AtividadeEventoType';
    }
}

