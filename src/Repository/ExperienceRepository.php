<?php

namespace App\Repository;

use App\Entity\Experience;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Experience|null find($id, $lockMode = null, $lockVersion = null)
 * @method Experience|null findOneBy(array $criteria, array $orderBy = null)
 * @method Experience[]    findAll()
 * @method Experience[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExperienceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Experience::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Experience $entity, bool $flush = true): void
    {
        $entity->updateNbComments();
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Experience $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function getBestExperiences(): array {
        $query = $this->createQueryBuilder('e')->select('e');
    
        $query =
            $query->orderBy('e.nbComments', 'DESC')
            ->setFirstResult(0)
            ->setMaxResults(5);
           
        return $query->getQuery()->getResult();
    }

    // /**
    //  * @return Experience[] Returns an array of Experience objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Experience
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */


    /**
     * @return Experience[] Returns an array of Experiences objects
     */
    public function searchExperience($title)
    {


        $query = $this->createQueryBuilder('experience')
            ->andWhere('experience.title LIKE :title')
            ->setParameter('title', '%' . $title . '%')
            ->getQuery();
        $experinces = $query->getArrayResult();
        return $experinces;
    }

    /**
     * @return Experience[] Returns an array of Experiences objects
     */
    public function searchAllExperiences()
    {
        $query = $this->createQueryBuilder('experience')
            ->getQuery();
        $experiences = $query->getArrayResult();
        return $experiences;
    }
}
