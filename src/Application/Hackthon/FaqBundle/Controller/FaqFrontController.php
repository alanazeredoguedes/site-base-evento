<?php
namespace App\Application\Hackthon\FaqBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Faq Front controller.
 *
 * @Route("/")
 */
class FaqFrontController extends Controller
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

    public function getRepository()
    {
        return $this->getDoctrine()->getRepository('ApplicationHackthonFaqBundle:Faq');
    }

    /**
    * @Route("/faq", name="front_faq")
    */

    public function index()
    {
      return $this->render('@ApplicationHackthonFaq/front_faq.html.twig');
    }
}

