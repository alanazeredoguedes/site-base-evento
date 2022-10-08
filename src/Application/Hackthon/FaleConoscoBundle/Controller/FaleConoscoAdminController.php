<?php
namespace App\Application\Hackthon\FaleConoscoBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

/**
 * FaleConosco Admin controller.
 *
 * @Route("/admin/hackthon/faleconosco/faleconosco")
 */
class FaleConoscoAdminController extends CRUDController
{

    public function getBundleName()
    {
        return 'ApplicationHackthonFaleConoscoBundle';
    }

    public function getEntityName()
    {
        return 'FaleConosco';
    }

    public function getFormType()
    {
        return 'App\Application\Hackthon\FaleConoscoBundle\Form\FaleConoscoType';
    }
}

