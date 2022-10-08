<?php
namespace App\Application\Hackthon\PatrocinadorBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Patrocinador Front controller.
 *
 * @Route("/")
 */
class PatrocinadorFrontController extends Controller
{

    public function getBundleName()
    {
        return 'ApplicationHackthonPatrocinadorBundle';
    }

    public function getEntityName()
    {
        return 'Patrocinador';
    }

    public function getFormType()
    {
        return 'App\Application\Hackthon\PatrocinadorBundle\Form\PatrocinadorType';
    }

    public function getRepository()
    {
        return $this->getDoctrine()->getRepository('ApplicationHackthonPatrocinadorBundle:Patrocinador');
    }

    /**
    * @Route("/patrocinador", name="front_patrocinador")
    */

    public function index()
    {
      return $this->render('@ApplicationHackthonPatrocinador/front_patrocinador.html.twig');
    }
}

