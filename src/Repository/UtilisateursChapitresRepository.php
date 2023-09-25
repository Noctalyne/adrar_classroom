<?php

namespace App\Repository;

use App\Entity\UtilisateursChapitres;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UtilisateursChapitres>
 *
 * @method UtilisateursChapitres|null find($id, $lockMode = null, $lockVersion = null)
 * @method UtilisateursChapitres|null findOneBy(array $criteria, array $orderBy = null)
 * @method UtilisateursChapitres[]    findAll()
 * @method UtilisateursChapitres[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UtilisateursChapitresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UtilisateursChapitres::class);
    }

//    /**
//     * @return UtilisateursChapitres[] Returns an array of UtilisateursChapitres objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?UtilisateursChapitres
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
