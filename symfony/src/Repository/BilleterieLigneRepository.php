<?php

namespace App\Repository;

use App\Entity\BilleterieLigne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BilleterieLigne>
 *
 * @method BilleterieLigne|null find($id, $lockMode = null, $lockVersion = null)
 * @method BilleterieLigne|null findOneBy(array $criteria, array $orderBy = null)
 * @method BilleterieLigne[]    findAll()
 * @method BilleterieLigne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BilleterieLigneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BilleterieLigne::class);
    }

    public function add(BilleterieLigne $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BilleterieLigne $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BilleterieLigne[] Returns an array of BilleterieLigne objects
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

//    public function findOneBySomeField($value): ?BilleterieLigne
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
