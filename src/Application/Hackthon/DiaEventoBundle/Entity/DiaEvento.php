<?php

namespace App\Application\Hackthon\DiaEventoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Application\Sonata\MediaBundle\Entity\Gallery;
use App\Application\Sonata\MediaBundle\Entity\Media;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Core\Annotation\ApiResource;


use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * DiaEvento
 * @ApiResource()
 * @ORM\Table(name="dia_evento")
 * @ORM\Entity(repositoryClass="App\Application\Hackthon\DiaEventoBundle\Repository\DiaEventoRepository")
 * @UniqueEntity(fields={"dia"}) 
 * @UniqueEntity(fields={"data"}) 

 */

class DiaEvento
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
     * @ORM\Column(name="dia", type="integer", unique=true)
     */
    private $dia;

    /**
     *
     * @ORM\Column(name="data", type="date", unique=true)
     */
    private $data;
    
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
    
   
    public function getDia()
    {
        return $this->dia;
    }
    
    public function setDia($dia): void
    {
        $this->dia = $dia;
    }
    
   
    public function getData()
    {
        return $this->data;
    }
    
    public function setData($data): void
    {
        $this->data = $data;
    }
    }
