<?php
namespace App\Application\Hackthon\SobreBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Sobre Front controller.
 *
 * @Route("/")
 */
class SobreFrontController extends Controller
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

    public function getRepository()
    {
        return $this->getDoctrine()->getRepository('ApplicationHackthonSobreBundle:Sobre');
    }

    /**
    * @Route("/sobre", name="front_sobre")
    */

    public function index()
    {
      return $this->render('@ApplicationHackthonSobre/front_sobre.html.twig');
    }
}

