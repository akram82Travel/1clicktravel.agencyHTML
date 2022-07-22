<?php

namespace App\Repository;

use App\Entity\ChercherCircuits;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ChercherCircuits>
 *
 * @method ChercherCircuits|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChercherCircuits|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChercherCircuits[]    findAll()
 * @method ChercherCircuits[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChercherCircuitsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChercherCircuits::class);
    }

    public function add(ChercherCircuits $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ChercherCircuits $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ChercherCircuits[] Returns an array of ChercherCircuits objects
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

//    public function findOneBySomeField($value): ?ChercherCircuits
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
