<?php
namespace App\Application\Hackthon\GaleriaBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Galeria Front controller.
 *
 * @Route("/")
 */
class GaleriaFrontController extends Controller
{

    public function getBundleName()
    {
        return 'ApplicationHackthonGaleriaBundle';
    }

    public function getEntityName()
    {
        return 'Galeria';
    }

    public function getFormType()
    {
        return 'App\Application\Hackthon\GaleriaBundle\Form\GaleriaType';
    }

    public function getRepository()
    {
        return $this->getDoctrine()->getRepository('ApplicationHackthonGaleriaBundle:Galeria');
    }

    /**
    * @Route("/galeria", name="front_galeria")
    */

    public function index()
    {
      return $this->render('@ApplicationHackthonGaleria/front_galeria.html.twig');
    }
}

