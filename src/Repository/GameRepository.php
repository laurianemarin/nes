<?php

namespace App\Repository;

use App\Entity\Game;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Game|null find($id, $lockMode = null, $lockVersion = null)
 * @method Game|null findOneBy(array $criteria, array $orderBy = null)
 * @method Game[]    findAll()
 * @method Game[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Game::class);
    }

    // /**
    //  * @return Game[] Returns an array of Game objects
    //  */
    public function findByCategory($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.category = :val')
            ->setParameter('val', $value)
            ->orderBy('g.name', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findByEditor($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.editor = :val')
            ->setParameter('val', $value)
            ->orderBy('g.name', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findByDeveloper($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.developer = :val')
            ->setParameter('val', $value)
            ->orderBy('g.name', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
}
