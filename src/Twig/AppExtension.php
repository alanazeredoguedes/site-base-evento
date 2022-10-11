<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('media_public_url', [$this, 'getMediaPublicUrl']),
            //new TwigFunction('media_public_url', [AppRuntime::class, 'getMediaPublicUrl']),

        ];
    }

    public function getMediaPublicUrl($container, $media, $format)
    {
        //dump($media);

         $provider = $container->get($media->getProviderReference());

        return $provider->generatePublicUrl($media, $format);
        //return 'dsda';
    }

}