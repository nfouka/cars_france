<?php

namespace App\Repository;

use App\Entity\VoitureEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method VoitureEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method VoitureEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method VoitureEntity[]    findAll()
 * @method VoitureEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VoitureEntityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, VoitureEntity::class);
    }

    // /**
    //  * @return VoitureEntity[] Returns an array of VoitureEntity objects
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
    public function findOneBySomeField($value): ?VoitureEntity
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
