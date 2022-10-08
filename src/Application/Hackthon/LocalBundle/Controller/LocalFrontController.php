<?php
namespace App\Application\Hackthon\LocalBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Local Front controller.
 *
 * @Route("/")
 */
class LocalFrontController extends Controller
{

    public function getBundleName()
    {
        return 'ApplicationHackthonLocalBundle';
    }

    public function getEntityName()
    {
        return 'Local';
    }

    public function getFormType()
    {
        return 'App\Application\Hackthon\LocalBundle\Form\LocalType';
    }

    public function getRepository()
    {
        return $this->getDoctrine()->getRepository('ApplicationHackthonLocalBundle:Local');
    }

    /**
    * @Route("/local", name="front_local")
    */

    public function index()
    {
      return $this->render('@ApplicationHackthonLocal/front_local.html.twig');
    }
}

