<?php

namespace App\Application\Hackthon\LocalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Application\Sonata\MediaBundle\Entity\Gallery;
use App\Application\Sonata\MediaBundle\Entity\Media;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Core\Annotation\ApiResource;



/**
 * Local
 * @ApiResource()
 * @ORM\Table(name="local")
 * @ORM\Entity(repositoryClass="App\Application\Hackthon\LocalBundle\Repository\LocalRepository")

 */

class Local
{
    /**
     * @var int  
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     *
     * @ORM\Column(name="titlulo", type="string")
     */
    private $titlulo;

    /**
     *
     * @ORM\Column(name="descricao", type="text")
     */
    private $descricao;

    /**
     *
     * @ORM\Column(name="iframeGoogleMaps", type="text")
     */
    private $iframeGoogleMaps;

    /**
     * @var Gallery
     *
     * @ORM\ManyToOne (targetEntity="App\Application\Sonata\MediaBundle\Entity\Gallery", cascade={"persist"})
     */
    private $ImagensLocal;
    
    public function __construct() {
        
    }
         
    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function getStringId(): ?String
    {
        return (String) $this->id;
    }
    
   
    public function getTitlulo()
    {
        return $this->titlulo;
    }
    
    public function setTitlulo($titlulo): void
    {
        $this->titlulo = $titlulo;
    }
    
   
    public function getDescricao()
    {
        return $this->descricao;
    }
    
    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }
    
   
    public function getIframeGoogleMaps()
    {
        return $this->iframeGoogleMaps;
    }
    
    public function setIframeGoogleMaps($iframeGoogleMaps): void
    {
        $this->iframeGoogleMaps = $iframeGoogleMaps;
    }
    
    /**
     * @return null|Gallery
     */
    public function getImagensLocal(): ?Gallery
    {
        return $this->ImagensLocal;
    }

    /**
     * @param null|Gallery $ImagensLocal
     */
    public function setImagensLocal(?Gallery $ImagensLocal): void
    {
        $this->ImagensLocal = $ImagensLocal;
    }
}
