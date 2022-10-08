<?php
namespace App\Application\Hackthon\DiaEventoBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * DiaEvento Front controller.
 *
 * @Route("/")
 */
class DiaEventoFrontController extends Controller
{

    public function getBundleName()
    {
        return 'ApplicationHackthonDiaEventoBundle';
    }

    public function getEntityName()
    {
        return 'DiaEvento';
    }

    public function getFormType()
    {
        return 'App\Application\Hackthon\DiaEventoBundle\Form\DiaEventoType';
    }

    public function getRepository()
    {
        return $this->getDoctrine()->getRepository('ApplicationHackthonDiaEventoBundle:DiaEvento');
    }

    /**
    * @Route("/diaevento", name="front_diaevento")
    */

    public function index()
    {
      return $this->render('@ApplicationHackthonDiaEvento/front_diaevento.html.twig');
    }
}

