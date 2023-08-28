<?php

namespace App\Repository;

use App\Entity\ChoreType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ChoreType>
 *
 * @method ChoreType|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChoreType|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChoreType[]    findAll()
 * @method ChoreType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChoreTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChoreType::class);
    }

//    /**
//     * @return ChoreType[] Returns an array of ChoreType objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ChoreType
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
