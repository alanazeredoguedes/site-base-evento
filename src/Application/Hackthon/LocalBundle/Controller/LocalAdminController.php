<?php
namespace App\Application\Hackthon\LocalBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

/**
 * Local Admin controller.
 *
 * @Route("/admin/hackthon/local/local")
 */
class LocalAdminController extends CRUDController
{

    public function getBundleName()
    {
        return 'ApplicationHackthonLocalBundle';
    }

    public function getEntityName()
    {
        return 'Local';
    }

    public function getFormType()
    {
        return 'App\Application\Hackthon\LocalBundle\Form\LocalType';
    }
}

