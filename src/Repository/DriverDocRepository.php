<?php

namespace App\Repository;

use App\Entity\DriverDoc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DriverDoc|null find($id, $lockMode = null, $lockVersion = null)
 * @method DriverDoc|null findOneBy(array $criteria, array $orderBy = null)
 * @method DriverDoc[]    findAll()
 * @method DriverDoc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DriverDocRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DriverDoc::class);
    }

    // /**
    //  * @return DriverDoc[] Returns an array of DriverDoc objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DriverDoc
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
