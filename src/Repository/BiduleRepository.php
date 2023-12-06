<?php

namespace App\Repository;

use App\Entity\Bidule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Bidule>
 *
 * @method Bidule|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bidule|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bidule[]    findAll()
 * @method Bidule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BiduleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bidule::class);
    }

//    /**
//     * @return Bidule[] Returns an array of Bidule objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Bidule
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
