<?php

namespace App\Repository;

use App\Entity\StoreHouse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<StoreHouse>
 *
 * @method StoreHouse|null find($id, $lockMode = null, $lockVersion = null)
 * @method StoreHouse|null findOneBy(array $criteria, array $orderBy = null)
 * @method StoreHouse[]    findAll()
 * @method StoreHouse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StoreHouseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StoreHouse::class);
    }

//    /**
//     * @return StoreHouse[] Returns an array of StoreHouse objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?StoreHouse
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
public function findBySearchQuery($searchQuery)
{
    return $this->createQueryBuilder('sh')
        ->andWhere('sh.nameSh LIKE :query OR sh.locationSh LIKE :query')
        ->setParameter('query', '%'.$searchQuery.'%')
        ->getQuery()
        ->getResult();
}
}
