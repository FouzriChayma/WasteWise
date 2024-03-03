<?php

namespace App\Repository;

use App\Entity\Stock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Stock>
 *
 * @method Stock|null find($id, $lockMode = null, $lockVersion = null)
 * @method Stock|null findOneBy(array $criteria, array $orderBy = null)
 * @method Stock[]    findAll()
 * @method Stock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Stock::class);
    }

//    /**
//     * @return Stock[] Returns an array of Stock objects
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

//    public function findOneBySomeField($value): ?Stock
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }


/**
     * Count the number of rows in the Stock table.
     *
     * @return int
     */
    public function countRows(): int
    {
        return $this->entityManager
            ->createQuery('SELECT COUNT(s.idSt) FROM App\Entity\Stock s')
            ->getSingleScalarResult();
    }

     // Custom method to fetch the first 4 stocks
     public function findFirstFour(): array
     {
         return $this->createQueryBuilder('s')
             ->setMaxResults(4)
             ->getQuery()
             ->getResult();
     }
     public function findBySearchQuery($searchQuery)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.name_st LIKE :query OR s.quantity_st LIKE :query') // Adjust field names as needed
            ->setParameter('query', '%'.$searchQuery.'%')
            ->getQuery()
            ->getResult();
    }
    public function findBy1($searchQuery)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.name_st LIKE :name OR s.selling_price LIKE :price')
            ->setParameter('name', '%'.$searchQuery.'%')
            ->setParameter('price', '%'.$searchQuery.'%')
            ->getQuery()
            ->getResult();
    }
    public function findAllWithSorting($sortField, $sortOrder, $pageSize, $offset): array
{
    $queryBuilder = $this->createQueryBuilder('s')
        ->orderBy("s.{$sortField}", $sortOrder)
        ->setMaxResults($pageSize)
        ->setFirstResult($offset);

    return $queryBuilder->getQuery()->getResult();
}

public function findMostOrderedStocks(): array
{
    return $this->createQueryBuilder('s')
    ->leftJoin('s.ourOrders', 'o')
    ->select('s', 'COUNT(o) as orderCount')
    ->groupBy('s.idSt')
    ->orderBy('orderCount', 'DESC')
    ->setMaxResults(4)
    ->getQuery()
    ->getResult();
}

}