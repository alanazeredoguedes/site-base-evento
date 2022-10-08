<?php

namespace App\Application\Hackthon\SobreBundle\Repository;

use App\Application\Hackthon\SobreBundle\Entity\Sobre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Sobre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sobre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sobre[]    findAll()
 * @method Sobre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SobreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sobre::class);
    }

    // /**
    //  * @return Sobre[] Returns an array of Sobre objects
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
    public function findOneBySomeField($value): ?Sobre
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
