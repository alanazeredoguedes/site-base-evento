<?php
namespace App\Application\Hackthon\PatrocinadorBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

/**
 * Patrocinador Admin controller.
 *
 * @Route("/admin/hackthon/patrocinador/patrocinador")
 */
class PatrocinadorAdminController extends CRUDController
{

    public function getBundleName()
    {
        return 'ApplicationHackthonPatrocinadorBundle';
    }

    public function getEntityName()
    {
        return 'Patrocinador';
    }

    public function getFormType()
    {
        return 'App\Application\Hackthon\PatrocinadorBundle\Form\PatrocinadorType';
    }
}

