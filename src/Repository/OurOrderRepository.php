<?php

namespace App\Repository;

use App\Entity\OurOrder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;




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

public function findAllWithSorting($sortField, $sortOrder, $pageSize, $offset): array
{
    $queryBuilder = $this->createQueryBuilder('o')
        ->leftJoin('o.stock', 's') // Make sure to join the related Stock entity if needed
        ->orderBy("o.{$sortField}", $sortOrder)
        ->setMaxResults($pageSize)
        ->setFirstResult($offset);

    return $queryBuilder->getQuery()->getResult();
}

public function getTotalOrders(): int
{
    return $this->createQueryBuilder('o')
        ->select('COUNT(o.idO) as totalOrders')
        ->getQuery()
        ->getSingleScalarResult();
}

public function getMostOrderedStock(): array
{
    $entityManager = $this->getEntityManager();

    $query = $entityManager->createQuery(
        'SELECT s.name_st, SUM(o.quantityO) as totalQuantity
         FROM App\Entity\OurOrder o
         JOIN o.stock s
         GROUP BY s.idSt
         ORDER BY totalQuantity DESC'
    );

    return $query->getResult();
}

// OurOrderRepository.php

public function getTotalSalesCount(): float
{
    $orders = $this->createQueryBuilder('o')
    ->getQuery()
    ->getResult();

$totalSum = 0;

foreach ($orders as $order) {
    $totalSum += $order->getTotalO();
}

return $totalSum;
}

public function getCancelledOrdersCount(): int
    {
        // Implement the logic to get the count for Cancelled Orders
        return $this->createQueryBuilder('o')
            ->select('COUNT(o.idO)')
            ->where('o.statusO = :cancelled')
            ->setParameter('cancelled', 'Cancelled') // Assuming this is the status for cancelled orders
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getPendingOrdersCount(): int
    {
        // Implement the logic to get the count for Pending Orders
        return $this->createQueryBuilder('o')
            ->select('COUNT(o.idO)')
            ->where('o.statusO = :pending')
            ->setParameter('pending', 'Pending') // Assuming this is the status for pending orders
            ->getQuery()
            ->getSingleScalarResult();
    }
    public function getDeliveredOrdersCount(): int
    {
        // Implement the logic to get the count for Delivered Orders
        return $this->createQueryBuilder('o')
            ->select('COUNT(o.idO)')
            ->where('o.statusO = :delivered')
            ->setParameter('delivered', 'Delivered') // Assuming this is the status for delivered orders
            ->getQuery()
            ->getSingleScalarResult();
    }



}