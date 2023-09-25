<?php

namespace App\Repository;

use App\Entity\Chapitre;
use App\Entity\Utilisateur;
use App\Entity\UtilisateurChapitres;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UtilisateurChapitres>
 *
 * @method UtilisateurChapitres|null find($id, $lockMode = null, $lockVersion = null)
 * @method UtilisateurChapitres|null findOneBy(array $criteria, array $orderBy = null)
 * @method UtilisateurChapitres[]    findAll()
 * @method UtilisateurChapitres[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UtilisateurChapitresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UtilisateurChapitres::class);
    }

    public function findByForeignKey(Utilisateur $utilisateur, Chapitre $chapitre) : UtilisateurChapitres
    {
        return $this->createQueryBuilder('uc')
            ->andWhere('uc.utilisateur_id = :utilisateur_id')
            ->setParameter('utilisateur_id', $utilisateur->getId())
            ->andWhere('uc.chapitre_id = :chapitre_id')
            ->setParameter('chapitre_id', $chapitre->getId())
            ->getQuery()
            ->getOneOrNullResult();
    }

//    /**
//     * @return UtilisateurChapitres[] Returns an array of UtilisateurChapitres objects
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

//    public function findOneBySomeField($value): ?UtilisateurChapitres
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
