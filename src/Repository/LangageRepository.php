<?php

namespace App\Repository;

use App\Entity\Langage;
use App\Entity\langages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method langages|null find($id, $lockMode = null, $lockVersion = null)
 * @method langages|null findOneBy(array $criteria, array $orderBy = null)
 * @method langages[]    findAll()
 * @method langages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LangageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, langages::class);
    }

    // /**
    //  * @return Language[] Returns an array of Language objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Language
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
