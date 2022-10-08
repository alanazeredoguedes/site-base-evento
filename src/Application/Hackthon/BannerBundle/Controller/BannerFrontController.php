<?php
namespace App\Application\Hackthon\BannerBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Banner Front controller.
 *
 * @Route("/")
 */
class BannerFrontController extends Controller
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

    public function getRepository()
    {
        return $this->getDoctrine()->getRepository('ApplicationHackthonBannerBundle:Banner');
    }

    /**
    * @Route("/banner", name="front_banner")
    */

    public function index()
    {
      return $this->render('@ApplicationHackthonBanner/front_banner.html.twig');
    }
}

