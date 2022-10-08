<?php
namespace App\Application\Hackthon\PalestranteBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

/**
 * Palestrante Admin controller.
 *
 * @Route("/admin/hackthon/palestrante/palestrante")
 */
class PalestranteAdminController extends CRUDController
{

    public function getBundleName()
    {
        return 'ApplicationHackthonPalestranteBundle';
    }

    public function getEntityName()
    {
        return 'Palestrante';
    }

    public function getFormType()
    {
        return 'App\Application\Hackthon\PalestranteBundle\Form\PalestranteType';
    }
}

