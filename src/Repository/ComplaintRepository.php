<?php

namespace App\Repository;

use App\Entity\Complaint;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Complaint>
 *
 * @method Complaint|null find($id, $lockMode = null, $lockVersion = null)
 * @method Complaint|null findOneBy(array $criteria, array $orderBy = null)
 * @method Complaint[]    findAll()
 * @method Complaint[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ComplaintRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Complaint::class);
    }

 
   public function paginationQuery()
   {
       return $this->createQueryBuilder('c')
           ->orderBy('c.id', 'ASC')
           ->getQuery()
       ;
   }
   public function countByLocation()
{
    $qb = $this->createQueryBuilder('c');
    $qb->select('c.location, COUNT(c.id) as complaint_count')
       ->groupBy('c.location');

    $results = $qb->getQuery()->getResult();

    // Define the size of the grid
    $gridSize = 1; // Adjust this value to change the granularity of the grid

    // Convert the results into an associative array
    $counts = [];
    foreach ($results as $result) {
        $location = explode(',', $result['location']);
        $roundedLat = round($location[0] / $gridSize) * $gridSize;
        $roundedLng = round($location[1] / $gridSize) * $gridSize;
        $roundedLocation = $roundedLat . ',' . $roundedLng;
        if (!isset($counts[$roundedLocation])) {
            $counts[$roundedLocation] = 0;
        }
        $counts[$roundedLocation] += $result['complaint_count'];
    }

    return $counts;
}


   
//    public function findOneBySomeField($value): ?Complaint
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}