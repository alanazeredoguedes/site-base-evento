<?php

namespace App\Application\Hackthon\SobreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Application\Sonata\MediaBundle\Entity\Gallery;
use App\Application\Sonata\MediaBundle\Entity\Media;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Core\Annotation\ApiResource;



/**
 * Sobre
 * @ApiResource()
 * @ORM\Table(name="sobre")
 * @ORM\Entity(repositoryClass="App\Application\Hackthon\SobreBundle\Repository\SobreRepository")

 */

class Sobre
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
     * @ORM\Column(name="descricao", type="string")
     */
    private $descricao;

    /**
     *
     * @ORM\Column(name="onde", type="string")
     */
    private $onde;

    /**
     *
     * @ORM\Column(name="quando", type="string")
     */
    private $quando;
    
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
    
   
    public function getDescricao()
    {
        return $this->descricao;
    }
    
    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }
    
   
    public function getOnde()
    {
        return $this->onde;
    }
    
    public function setOnde($onde): void
    {
        $this->onde = $onde;
    }
    
   
    public function getQuando()
    {
        return $this->quando;
    }
    
    public function setQuando($quando): void
    {
        $this->quando = $quando;
    }
    }
