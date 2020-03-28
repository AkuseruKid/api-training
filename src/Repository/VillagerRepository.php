<?php

namespace App\Repository;

use App\Entity\Villager;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Villager|null find($id, $lockMode = null, $lockVersion = null)
 * @method Villager|null findOneBy(array $criteria, array $orderBy = null)
 * @method Villager[]    findAll()
 * @method Villager[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VillagerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Villager::class);
    }

    // /**
    //  * @return Villager[] Returns an array of Villager objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Villager
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
