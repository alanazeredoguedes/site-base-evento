<?php
namespace App\Application\Hackthon\AtividadeEventoBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * AtividadeEvento Front controller.
 *
 * @Route("/")
 */
class AtividadeEventoFrontController extends Controller
{

    public function getBundleName()
    {
        return 'ApplicationHackthonAtividadeEventoBundle';
    }

    public function getEntityName()
    {
        return 'AtividadeEvento';
    }

    public function getFormType()
    {
        return 'App\Application\Hackthon\AtividadeEventoBundle\Form\AtividadeEventoType';
    }

    public function getRepository()
    {
        return $this->getDoctrine()->getRepository('ApplicationHackthonAtividadeEventoBundle:AtividadeEvento');
    }

    /**
    * @Route("/atividadeevento", name="front_atividadeevento")
    */

    public function index()
    {
      return $this->render('@ApplicationHackthonAtividadeEvento/front_atividadeevento.html.twig');
    }
}

