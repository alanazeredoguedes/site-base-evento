<?php

namespace App\Application\Hackthon\PalestranteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Application\Sonata\MediaBundle\Entity\Gallery;
use App\Application\Sonata\MediaBundle\Entity\Media;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Core\Annotation\ApiResource;



/**
 * Palestrante
 * @ApiResource()
 * @ORM\Table(name="palestrante")
 * @ORM\Entity(repositoryClass="App\Application\Hackthon\PalestranteBundle\Repository\PalestranteRepository")

 */

class Palestrante
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
     *
     * @ORM\Column(name="descricao", type="string", nullable=true)
     */
    private $descricao;

    /**
     *
     * @ORM\Column(name="instragram", type="string", nullable=true)
     */
    private $instragram;

    /**
     *
     * @ORM\Column(name="linkedin", type="string", nullable=true)
     */
    private $linkedin;

    /**
     *
     * @ORM\Column(name="email", type="string", nullable=true)
     */
    private $email;

    /**
     *
     * @ORM\Column(name="twitter", type="string", nullable=true)
     */
    private $twitter;

    /**
     * @var Media
     *
     * @ORM\ManyToOne (targetEntity="App\Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     */
    private $foto;
    
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
    
   
    public function getDescricao()
    {
        return $this->descricao;
    }
    
    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }
    
   
    public function getInstragram()
    {
        return $this->instragram;
    }
    
    public function setInstragram($instragram): void
    {
        $this->instragram = $instragram;
    }
    
   
    public function getLinkedin()
    {
        return $this->linkedin;
    }
    
    public function setLinkedin($linkedin): void
    {
        $this->linkedin = $linkedin;
    }
    
   
    public function getEmail()
    {
        return $this->email;
    }
    
    public function setEmail($email): void
    {
        $this->email = $email;
    }
    
   
    public function getTwitter()
    {
        return $this->twitter;
    }
    
    public function setTwitter($twitter): void
    {
        $this->twitter = $twitter;
    }
    
    /**
     * @return null|Media
     */
    public function getFoto(): ?Media
    {
        return $this->foto;
    }

    /**
     * @param null|Media $foto
     */
    public function setFoto(?Media $foto): void
    {
        $this->foto = $foto;
    }
}
