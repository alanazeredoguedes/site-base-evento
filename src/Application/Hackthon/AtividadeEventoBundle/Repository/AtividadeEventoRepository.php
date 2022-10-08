<?php

namespace App\Application\Hackthon\AtividadeEventoBundle\Repository;

use App\Application\Hackthon\AtividadeEventoBundle\Entity\AtividadeEvento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AtividadeEvento|null find($id, $lockMode = null, $lockVersion = null)
 * @method AtividadeEvento|null findOneBy(array $criteria, array $orderBy = null)
 * @method AtividadeEvento[]    findAll()
 * @method AtividadeEvento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AtividadeEventoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AtividadeEvento::class);
    }

    // /**
    //  * @return AtividadeEvento[] Returns an array of AtividadeEvento objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AtividadeEvento
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
