<?php

namespace App\Repository;

use App\Entity\Feeder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Feeder|null find($id, $lockMode = null, $lockVersion = null)
 * @method Feeder|null findOneBy(array $criteria, array $orderBy = null)
 * @method Feeder[]    findAll()
 * @method Feeder[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FeederRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Feeder::class);
    }

    // /**
    //  * @return Feeder[] Returns an array of Feeder objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Feeder
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
