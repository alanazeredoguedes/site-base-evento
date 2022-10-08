<?php

namespace App\Application\Hackthon\EventoBundle\Repository;

use App\Application\Hackthon\EventoBundle\Entity\evento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method evento|null find($id, $lockMode = null, $lockVersion = null)
 * @method evento|null findOneBy(array $criteria, array $orderBy = null)
 * @method evento[]    findAll()
 * @method evento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class eventoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, evento::class);
    }

    // /**
    //  * @return evento[] Returns an array of evento objects
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
    public function findOneBySomeField($value): ?evento
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
