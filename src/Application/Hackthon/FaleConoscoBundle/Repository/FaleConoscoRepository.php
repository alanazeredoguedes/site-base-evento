<?php

namespace App\Application\Hackthon\FaleConoscoBundle\Repository;

use App\Application\Hackthon\FaleConoscoBundle\Entity\FaleConosco;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FaleConosco|null find($id, $lockMode = null, $lockVersion = null)
 * @method FaleConosco|null findOneBy(array $criteria, array $orderBy = null)
 * @method FaleConosco[]    findAll()
 * @method FaleConosco[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FaleConoscoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FaleConosco::class);
    }

    // /**
    //  * @return FaleConosco[] Returns an array of FaleConosco objects
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
    public function findOneBySomeField($value): ?FaleConosco
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
