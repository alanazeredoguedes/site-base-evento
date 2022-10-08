<?php

namespace App\Application\Hackthon\PatrocinadorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Application\Sonata\MediaBundle\Entity\Gallery;
use App\Application\Sonata\MediaBundle\Entity\Media;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Core\Annotation\ApiResource;



/**
 * Patrocinador
 * @ApiResource()
 * @ORM\Table(name="patrocinador")
 * @ORM\Entity(repositoryClass="App\Application\Hackthon\PatrocinadorBundle\Repository\PatrocinadorRepository")

 */

class Patrocinador
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
     * @ORM\Column(name="nome", type="string")
     */
    private $nome;

    /**
     * @var Media
     *
     * @ORM\ManyToOne (targetEntity="App\Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     */
    private $logo;
    
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
    
   
    public function getNome()
    {
        return $this->nome;
    }
    
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }
    
    /**
     * @return null|Media
     */
    public function getLogo(): ?Media
    {
        return $this->logo;
    }

    /**
     * @param null|Media $logo
     */
    public function setLogo(?Media $logo): void
    {
        $this->logo = $logo;
    }
}
