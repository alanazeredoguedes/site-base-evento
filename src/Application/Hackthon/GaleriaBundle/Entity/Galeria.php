<?php

namespace App\Application\Hackthon\GaleriaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Application\Sonata\MediaBundle\Entity\Gallery;
use App\Application\Sonata\MediaBundle\Entity\Media;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Core\Annotation\ApiResource;



/**
 * Galeria
 * @ApiResource()
 * @ORM\Table(name="galeria")
 * @ORM\Entity(repositoryClass="App\Application\Hackthon\GaleriaBundle\Repository\GaleriaRepository")

 */

class Galeria
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
     * @var Gallery
     *
     * @ORM\ManyToOne (targetEntity="App\Application\Sonata\MediaBundle\Entity\Gallery", cascade={"persist"})
     */
    private $imagens;
    
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
     * @return null|Gallery
     */
    public function getImagens(): ?Gallery
    {
        return $this->imagens;
    }

    /**
     * @param null|Gallery $imagens
     */
    public function setImagens(?Gallery $imagens): void
    {
        $this->imagens = $imagens;
    }
}
