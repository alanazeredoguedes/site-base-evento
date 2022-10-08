<?php

namespace App\Application\Hackthon\PatrocinadorBundle\Repository;

use App\Application\Hackthon\PatrocinadorBundle\Entity\Patrocinador;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Patrocinador|null find($id, $lockMode = null, $lockVersion = null)
 * @method Patrocinador|null findOneBy(array $criteria, array $orderBy = null)
 * @method Patrocinador[]    findAll()
 * @method Patrocinador[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PatrocinadorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Patrocinador::class);
    }

    // /**
    //  * @return Patrocinador[] Returns an array of Patrocinador objects
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
    public function findOneBySomeField($value): ?Patrocinador
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
