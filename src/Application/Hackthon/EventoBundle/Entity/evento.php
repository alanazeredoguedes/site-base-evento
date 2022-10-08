<?php

namespace App\Application\Hackthon\EventoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Application\Sonata\MediaBundle\Entity\Gallery;
use App\Application\Sonata\MediaBundle\Entity\Media;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Core\Annotation\ApiResource;



/**
 * evento
 * @ApiResource()
 * @ORM\Table(name="evento")
 * @ORM\Entity(repositoryClass="App\Application\Hackthon\EventoBundle\Repository\eventoRepository")

 */

class evento
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
     * @ORM\Column(name="rua", type="string")
     */
    private $rua;

    /**
     *
     * @ORM\Column(name="cidade", type="string")
     */
    private $cidade;

    /**
     *
     * @ORM\Column(name="estado", type="string")
     */
    private $estado;

    /**
     *
     * @ORM\Column(name="numero", type="string")
     */
    private $numero;

    /**
     *
     * @ORM\Column(name="complemento", type="string")
     */
    private $complemento;

    /**
     *
     * @ORM\Column(name="telefone", type="string")
     */
    private $telefone;

    /**
     *
     * @ORM\Column(name="email", type="string")
     */
    private $email;

    /**
     * @var Media
     *
     * @ORM\ManyToOne (targetEntity="App\Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     */
    private $logo;

    /**
     *
     * @ORM\Column(name="nome", type="string")
     */
    private $nome;
    
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
    
   
    public function getRua()
    {
        return $this->rua;
    }
    
    public function setRua($rua): void
    {
        $this->rua = $rua;
    }
    
   
    public function getCidade()
    {
        return $this->cidade;
    }
    
    public function setCidade($cidade): void
    {
        $this->cidade = $cidade;
    }
    
   
    public function getEstado()
    {
        return $this->estado;
    }
    
    public function setEstado($estado): void
    {
        $this->estado = $estado;
    }
    
   
    public function getNumero()
    {
        return $this->numero;
    }
    
    public function setNumero($numero): void
    {
        $this->numero = $numero;
    }
    
   
    public function getComplemento()
    {
        return $this->complemento;
    }
    
    public function setComplemento($complemento): void
    {
        $this->complemento = $complemento;
    }
    
   
    public function getTelefone()
    {
        return $this->telefone;
    }
    
    public function setTelefone($telefone): void
    {
        $this->telefone = $telefone;
    }
    
   
    public function getEmail()
    {
        return $this->email;
    }
    
    public function setEmail($email): void
    {
        $this->email = $email;
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

   
    public function getNome()
    {
        return $this->nome;
    }
    
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }
    }
