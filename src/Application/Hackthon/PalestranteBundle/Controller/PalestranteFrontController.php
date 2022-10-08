<?php
namespace App\Application\Hackthon\PalestranteBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Palestrante Front controller.
 *
 * @Route("/")
 */
class PalestranteFrontController extends Controller
{

    public function getBundleName()
    {
        return 'ApplicationHackthonPalestranteBundle';
    }

    public function getEntityName()
    {
        return 'Palestrante';
    }

    public function getFormType()
    {
        return 'App\Application\Hackthon\PalestranteBundle\Form\PalestranteType';
    }

    public function getRepository()
    {
        return $this->getDoctrine()->getRepository('ApplicationHackthonPalestranteBundle:Palestrante');
    }

    /**
    * @Route("/palestrante", name="front_palestrante")
    */

    public function index()
    {
      return $this->render('@ApplicationHackthonPalestrante/front_palestrante.html.twig');
    }
}

