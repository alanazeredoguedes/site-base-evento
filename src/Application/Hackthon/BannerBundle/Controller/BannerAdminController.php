<?php
namespace App\Application\Hackthon\BannerBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

/**
 * Banner Admin controller.
 *
 * @Route("/admin/hackthon/banner/banner")
 */
class BannerAdminController extends CRUDController
{

    public function getBundleName()
    {
        return 'ApplicationHackthonBannerBundle';
    }

    public function getEntityName()
    {
        return 'Banner';
    }

    public function getFormType()
    {
        return 'App\Application\Hackthon\BannerBundle\Form\BannerType';
    }
}

