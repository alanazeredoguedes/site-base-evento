<?php
namespace App\Application\Hackthon\EventoBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * evento Front controller.
 *
 * @Route("/")
 */
class eventoFrontController extends Controller
{

    public function getBundleName()
    {
        return 'ApplicationHackthonEventoBundle';
    }

    public function getEntityName()
    {
        return 'evento';
    }

    public function getFormType()
    {
        return 'App\Application\Hackthon\EventoBundle\Form\eventoType';
    }

    public function getRepository()
    {
        return $this->getDoctrine()->getRepository('ApplicationHackthonEventoBundle:evento');
    }

    /**
    * @Route("/evento", name="front_evento")
    */

    public function index()
    {
      return $this->render('@ApplicationHackthonEvento/front_evento.html.twig');
    }
}

