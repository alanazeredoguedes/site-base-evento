<?php
namespace App\Application\Hackthon\FaqBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

/**
 * Faq Admin controller.
 *
 * @Route("/admin/hackthon/faq/faq")
 */
class FaqAdminController extends CRUDController
{

    public function getBundleName()
    {
        return 'ApplicationHackthonFaqBundle';
    }

    public function getEntityName()
    {
        return 'Faq';
    }

    public function getFormType()
    {
        return 'App\Application\Hackthon\FaqBundle\Form\FaqType';
    }
}

