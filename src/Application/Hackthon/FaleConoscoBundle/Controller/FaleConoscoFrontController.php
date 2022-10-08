<?php
namespace App\Application\Hackthon\FaleConoscoBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * FaleConosco Front controller.
 *
 * @Route("/")
 */
class FaleConoscoFrontController extends Controller
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

    public function getRepository()
    {
        return $this->getDoctrine()->getRepository('ApplicationHackthonFaleConoscoBundle:FaleConosco');
    }

    /**
    * @Route("/faleconosco", name="front_faleconosco")
    */

    public function index()
    {
      return $this->render('@ApplicationHackthonFaleConosco/front_faleconosco.html.twig');
    }
}

