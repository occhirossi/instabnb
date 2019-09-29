<?php

namespace App\Repository;

use App\Entity\Annoncement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Annoncement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Annoncement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Annoncement[]    findAll()
 * @method Annoncement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnnoncementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Annoncement::class);
    }

    // /**
    //  * @return Annoncement[] Returns an array of Annoncement objects
    //  */

    public function findTableau($limit): array
    {
        return $this->createQueryBuilder('annoncement')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

public function findTableauEnt(): array
{
    return $this->createQueryBuilder('annoncement')
        ->getQuery()
        ->getResult();
}


}
