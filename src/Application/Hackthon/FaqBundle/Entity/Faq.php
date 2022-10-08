<?php

namespace App\Application\Hackthon\FaqBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Application\Sonata\MediaBundle\Entity\Gallery;
use App\Application\Sonata\MediaBundle\Entity\Media;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Core\Annotation\ApiResource;



/**
 * Faq
 * @ApiResource()
 * @ORM\Table(name="faq")
 * @ORM\Entity(repositoryClass="App\Application\Hackthon\FaqBundle\Repository\FaqRepository")

 */

class Faq
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
     * @ORM\Column(name="Pergunta", type="string")
     */
    private $Pergunta;

    /**
     *
     * @ORM\Column(name="Resposta", type="string")
     */
    private $Resposta;
    
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
    
   
    public function getPergunta()
    {
        return $this->Pergunta;
    }
    
    public function setPergunta($Pergunta): void
    {
        $this->Pergunta = $Pergunta;
    }
    
   
    public function getResposta()
    {
        return $this->Resposta;
    }
    
    public function setResposta($Resposta): void
    {
        $this->Resposta = $Resposta;
    }
    }
