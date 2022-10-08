<?php

namespace App\Application\Hackthon\FaleConoscoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Application\Sonata\MediaBundle\Entity\Gallery;
use App\Application\Sonata\MediaBundle\Entity\Media;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Core\Annotation\ApiResource;



/**
 * FaleConosco
 * @ApiResource()
 * @ORM\Table(name="fale_conosco")
 * @ORM\Entity(repositoryClass="App\Application\Hackthon\FaleConoscoBundle\Repository\FaleConoscoRepository")

 */

class FaleConosco
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
     * @ORM\Column(name="email", type="string")
     */
    private $email;

    /**
     *
     * @ORM\Column(name="assunto", type="string")
     */
    private $assunto;

    /**
     *
     * @ORM\Column(name="mensagem", type="text")
     */
    private $mensagem;
    
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
    
   
    public function getEmail()
    {
        return $this->email;
    }
    
    public function setEmail($email): void
    {
        $this->email = $email;
    }
    
   
    public function getAssunto()
    {
        return $this->assunto;
    }
    
    public function setAssunto($assunto): void
    {
        $this->assunto = $assunto;
    }
    
   
    public function getMensagem()
    {
        return $this->mensagem;
    }
    
    public function setMensagem($mensagem): void
    {
        $this->mensagem = $mensagem;
    }
    }
