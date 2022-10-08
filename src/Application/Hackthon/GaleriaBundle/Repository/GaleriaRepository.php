<?php

namespace App\Application\Hackthon\GaleriaBundle\Repository;

use App\Application\Hackthon\GaleriaBundle\Entity\Galeria;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Galeria|null find($id, $lockMode = null, $lockVersion = null)
 * @method Galeria|null findOneBy(array $criteria, array $orderBy = null)
 * @method Galeria[]    findAll()
 * @method Galeria[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GaleriaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Galeria::class);
    }

    // /**
    //  * @return Galeria[] Returns an array of Galeria objects
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
    public function findOneBySomeField($value): ?Galeria
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
