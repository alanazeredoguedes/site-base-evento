<?php
namespace App\Application\Hackthon\GaleriaBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

/**
 * Galeria Admin controller.
 *
 * @Route("/admin/hackthon/galeria/galeria")
 */
class GaleriaAdminController extends CRUDController
{

    public function getBundleName()
    {
        return 'ApplicationHackthonGaleriaBundle';
    }

    public function getEntityName()
    {
        return 'Galeria';
    }

    public function getFormType()
    {
        return 'App\Application\Hackthon\GaleriaBundle\Form\GaleriaType';
    }
}

