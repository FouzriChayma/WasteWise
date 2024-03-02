<?php

namespace App\Repository;

use App\Entity\Mission;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Mission>
 *
 * @method Mission|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mission|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mission[]    findAll()
 * @method Mission[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MissionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mission::class);
    }

//    /**
//     * @return Mission[] Returns an array of Mission objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Mission
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
public function getMissionsByPlannification($id)
    {
        return $this->createQueryBuilder('p')
        ->join('p.planification', 'm')
        ->where('m.id_plan = :id')
        ->setParameter('id', $id)
        ->orderBy('m.date', 'ASC')
        ->setMaxResults(10)
        ->getQuery()
        ->getResult()
       ;
    }
    public function getMissionsByDriver($driver_id)
{
    $query = $this->createQueryBuilder('m')
        ->join('m.planification', 'p')
        ->where('p.id_driver = :driver_id')
        ->setParameter('driver_id', $driver_id)
        ->orderBy('m.start_date', 'ASC')
        ->getQuery();

    return $query->getResult();
}    


  
}
