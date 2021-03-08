<?php

namespace App\Repository;

use App\Entity\VehicleDoc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VehicleDoc|null find($id, $lockMode = null, $lockVersion = null)
 * @method VehicleDoc|null findOneBy(array $criteria, array $orderBy = null)
 * @method VehicleDoc[]    findAll()
 * @method VehicleDoc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VehicleDocRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VehicleDoc::class);
    }

    // /**
    //  * @return VehicleDoc[] Returns an array of VehicleDoc objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VehicleDoc
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
