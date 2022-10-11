<?php

namespace App\Controller;

use App\Application\Hackthon\AtividadeEventoBundle\Entity\AtividadeEvento;
use App\Application\Hackthon\BannerBundle\Entity\Banner;
use App\Application\Hackthon\DiaEventoBundle\Entity\DiaEvento;
use App\Application\Hackthon\FaqBundle\Entity\Faq;
use App\Application\Hackthon\GaleriaBundle\Entity\Galeria;
use App\Application\Hackthon\LocalBundle\Entity\Local;
use App\Application\Hackthon\PalestranteBundle\Entity\Palestrante;
use App\Application\Hackthon\PatrocinadorBundle\Entity\Patrocinador;
use App\Application\Hackthon\SobreBundle\Entity\Sobre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    /**
     * @Route("/", name="app_site")
     */
    public function index(): Response
    {
        $container = $this->container;

        $em = $this->getDoctrine()->getManager();

        $sobre = $em->getRepository(Sobre::class)->findOneBy(['id' => 1]);
        $perguntas = $em->getRepository(Faq::class)->findAll();
        $patrocinadores = $em->getRepository(Patrocinador::class)->findAll();
        $palestrantes = $em->getRepository(Palestrante::class)->findAll();
        $diasEvento = $em->getRepository(DiaEvento::class)->findAll();

        $atividadesEvento = $em->getRepository(AtividadeEvento::class)->findBy([],['horario' => 'ASC']);

        $galeriaImagens = $em->getRepository(Galeria::class)->findOneBy(['id' => 1]);
        $localEvento = $em->getRepository(Local::class)->findOneBy(['id' => 1]);
        $banner = $em->getRepository(Banner::class)->findOneBy(['id' => 1]);


        return $this->render('site/index.html.twig', [
            'perguntas' => $perguntas,
            'patrocinadores' => $patrocinadores,
            'sobre' => $sobre,
            'palestrantes' => $palestrantes,
            'diasEvento' => $diasEvento,
            'atividadesEvento' => $atividadesEvento,
            'galeriaImagens' => $galeriaImagens,
            'container' => $container,
            'localEvento' => $localEvento,
            'banner' => $banner,

        ]);
    }
}
