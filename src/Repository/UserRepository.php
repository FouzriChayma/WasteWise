<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @extends ServiceEntityRepository<User>
* @implements PasswordUpgraderInterface<User>
 *
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', $user::class));
        }

        $user->setPassword($newHashedPassword);
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
    }

 
   public function searchAdmin($value): array
    {
        return $this->createQueryBuilder('u')
        ->andWhere('(u.name = :val OR u.email = :val)')
        ->andWhere('u.role = :role')
        ->setParameter('val', $value)
        ->setParameter('role', 'Admin')
            ->getQuery()
            ->getResult()
       ;
    }
    public function searchDriver($value): array
    {
        return $this->createQueryBuilder('u')
        ->andWhere('(u.name = :val OR u.email = :val)')
        ->andWhere('u.role = :role')
        ->setParameter('val', $value)
        ->setParameter('role', 'Driver')
            ->getQuery()
            ->getResult()
       ;
    }
    public function searchSupplier($value): array
    {
        return $this->createQueryBuilder('u')
        ->andWhere('(u.name = :val OR u.email = :val)')
        ->andWhere('u.role = :role')
        ->setParameter('val', $value)
        ->setParameter('role', 'Supplier')
            ->getQuery()
            ->getResult()
       ;
    }
    public function searchClient($value): array
    {
        return $this->createQueryBuilder('u')
        ->andWhere('(u.name = :val OR u.email = :val)')
        ->andWhere('u.role = :role')
        ->setParameter('val', $value)
        ->setParameter('role', 'Client')
            ->getQuery()
            ->getResult()
       ;
    }


    public function countBannedUsers(): int
{
    return $this->createQueryBuilder('u')
        ->select('COUNT(u.id)')
        ->where('u.isBanned = :isBanned')
        ->setParameter('isBanned', true)
        ->getQuery()
        ->getSingleScalarResult();
}

public function countActiveUsers(): int
{
    return $this->createQueryBuilder('u')
        ->select('COUNT(u.id)')
        ->where('u.isBanned = :isBanned')
        ->setParameter('isBanned', false)
        ->getQuery()
        ->getSingleScalarResult();
}

//    public function findOneBySomeField($value): ?User
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
