<?php

namespace App\Repository;

use App\Entity\OurOrder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OurOrder>
 *
 * @method OurOrder|null find($id, $lockMode = null, $lockVersion = null)
 * @method OurOrder|null findOneBy(array $criteria, array $orderBy = null)
 * @method OurOrder[]    findAll()
 * @method OurOrder[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OurOrderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OurOrder::class);
    }

//    /**
//     * @return OurOrder[] Returns an array of OurOrder objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?OurOrder
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
