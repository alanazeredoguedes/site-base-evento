<?php

namespace App\Twig;

use Psr\Container\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Twig\Extension\RuntimeExtensionInterface;

class AppRuntime implements RuntimeExtensionInterface
{
  /*  private $container;
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        // this simple example doesn't define any dependency, but in your own
        // extensions, you'll need to inject services using this constructor
    }*/

    public function getMediaPublicUrl($container, $media, $format)
    {
       $provider = $container->get($media->getProviderName());

        return $provider->generatePublicUrl($media, $format);
    }
}