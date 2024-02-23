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

public function searchOrders($searchQuery, $page, $perPage)
{
    $queryBuilder = $this->createQueryBuilder('o');

    // Filter orders based on the search query (assuming 'quantityO', 'statusO', and 'idO' are fields to search)
    if (!empty($searchQuery)) {
        $queryBuilder
            ->andWhere($queryBuilder->expr()->like('o.quantityO', ':searchQuery'))
            ->orWhere($queryBuilder->expr()->like('o.statusO', ':searchQuery'))
            ->orWhere($queryBuilder->expr()->like('o.idO', ':searchQuery'))
            ->setParameter('searchQuery', '%' . $searchQuery . '%');
    }

    // Paginate the results
    $queryBuilder
        ->setFirstResult(($page - 1) * $perPage)
        ->setMaxResults($perPage);

    return $queryBuilder->getQuery()->getResult();
}

public function countSearchResults($searchQuery)
{
    $queryBuilder = $this->createQueryBuilder('o')
        ->select('COUNT(o.idO)');

    // Filter orders based on the search query (assuming 'quantityO', 'statusO', and 'idO' are fields to search)
    if (!empty($searchQuery)) {
        $queryBuilder
            ->andWhere($queryBuilder->expr()->like('o.quantityO', ':searchQuery'))
            ->orWhere($queryBuilder->expr()->like('o.statusO', ':searchQuery'))
            ->orWhere($queryBuilder->expr()->like('o.idO', ':searchQuery'))
            ->setParameter('searchQuery', '%' . $searchQuery . '%');
    }

    return $queryBuilder->getQuery()->getSingleScalarResult();
}
}
