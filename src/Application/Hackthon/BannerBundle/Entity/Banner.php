<?php

namespace App\Application\Hackthon\BannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Application\Sonata\MediaBundle\Entity\Gallery;
use App\Application\Sonata\MediaBundle\Entity\Media;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Core\Annotation\ApiResource;



/**
 * Banner
 * @ApiResource()
 * @ORM\Table(name="banner")
 * @ORM\Entity(repositoryClass="App\Application\Hackthon\BannerBundle\Repository\BannerRepository")

 */

class Banner
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
     * @ORM\Column(name="titulo", type="string")
     */
    private $titulo;

    /**
     *
     * @ORM\Column(name="descricao", type="string")
     */
    private $descricao;

    /**
     * @var Media
     *
     * @ORM\ManyToOne (targetEntity="App\Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     */
    private $imagem;
    
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
    
   
    public function getTitulo()
    {
        return $this->titulo;
    }
    
    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }
    
   
    public function getDescricao()
    {
        return $this->descricao;
    }
    
    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }
    
    /**
     * @return null|Media
     */
    public function getImagem(): ?Media
    {
        return $this->imagem;
    }

    /**
     * @param null|Media $imagem
     */
    public function setImagem(?Media $imagem): void
    {
        $this->imagem = $imagem;
    }
}
