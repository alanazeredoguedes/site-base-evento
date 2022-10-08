<?php

namespace App\Application\Hackthon\AtividadeEventoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Application\Sonata\MediaBundle\Entity\Gallery;
use App\Application\Sonata\MediaBundle\Entity\Media;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Core\Annotation\ApiResource;



/**
 * AtividadeEvento
 * @ApiResource()
 * @ORM\Table(name="atividade_evento")
 * @ORM\Entity(repositoryClass="App\Application\Hackthon\AtividadeEventoBundle\Repository\AtividadeEventoRepository")

 */

class AtividadeEvento
{
    /**
     * @var int  
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Many AtividadeEvento has One DiaEvento (DiaEvento).
     * @ORM\ManyToOne(targetEntity="App\Application\Hackthon\DiaEventoBundle\Entity\DiaEvento")
     * @ORM\JoinColumn(name="dia_evento_id", referencedColumnName="id")
     */
    private $diaEvento;

    /**
     * Many AtividadeEvento has One Palestrante (Palestrante).
     * @ORM\ManyToOne(targetEntity="App\Application\Hackthon\PalestranteBundle\Entity\Palestrante")
     * @ORM\JoinColumn(name="palestrante_id", referencedColumnName="id")
     */
    private $palestrante;

    /**
     *
     * @ORM\Column(name="horario", type="time")
     */
    private $horario;

    /**
     *
     * @ORM\Column(name="atividade", type="string")
     */
    private $atividade;

    /**
     *
     * @ORM\Column(name="descricao", type="string")
     */
    private $descricao;
    
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
    
   
   /**
    * @return mixed
    */
    public function getDiaEvento()
    {
        return $this->diaEvento;
    }
    
    /**
     * @param mixed $diaEvento
     */
    public function setDiaEvento($diaEvento): void
    {
        $this->diaEvento = $diaEvento;
    }
    
   
   /**
    * @return mixed
    */
    public function getPalestrante()
    {
        return $this->palestrante;
    }
    
    /**
     * @param mixed $palestrante
     */
    public function setPalestrante($palestrante): void
    {
        $this->palestrante = $palestrante;
    }
    
   
    public function getHorario()
    {
        return $this->horario;
    }
    
    public function setHorario($horario): void
    {
        $this->horario = $horario;
    }
    
   
    public function getAtividade()
    {
        return $this->atividade;
    }
    
    public function setAtividade($atividade): void
    {
        $this->atividade = $atividade;
    }
    
   
    public function getDescricao()
    {
        return $this->descricao;
    }
    
    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }
    }
