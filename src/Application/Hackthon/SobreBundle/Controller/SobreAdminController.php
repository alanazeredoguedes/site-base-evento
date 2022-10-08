<?php
namespace App\Application\Hackthon\SobreBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

/**
 * Sobre Admin controller.
 *
 * @Route("/admin/hackthon/sobre/sobre")
 */
class SobreAdminController extends CRUDController
{

    public function getBundleName()
    {
        return 'ApplicationHackthonSobreBundle';
    }

    public function getEntityName()
    {
        return 'Sobre';
    }

    public function getFormType()
    {
        return 'App\Application\Hackthon\SobreBundle\Form\SobreType';
    }
}

