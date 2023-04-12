<?php

namespace App\Repository;

use App\Entity\Fruit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @extends ServiceEntityRepository<Fruit>
 *
 * @method Fruit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fruit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fruit[]    findAll()
 * @method Fruit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FruitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fruit::class);
    }

    public function save(Fruit $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Fruit $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }


	/**
	 * Our new getAllFruits() method
	 *
	 * 1. Create & pass query to paginate method
	 * 2. Paginate will return a `\Doctrine\ORM\Tools\Pagination\Paginator` object
	 * 3. Return that object to the controller
	 *
	 * @param integer $currentPage The current page (passed from controller)
	 *
	 * @return \Doctrine\ORM\Tools\Pagination\Paginator
	 */
	public function getAllFruits($currentPage = 1)
	{
		// Create our query
		$query = $this->createQueryBuilder('f')
			->orderBy('f.id', 'DESC')
			->getQuery();

		// No need to manually get get the result ($query->getResult())

		$paginator = $this->paginate($query, $currentPage);

		return $paginator;
	}
	
	/**
	 * Our new getAllFruits() method
	 *
	 * 1. Create & pass query to paginate method
	 * 2. Paginate will return a `\Doctrine\ORM\Tools\Pagination\Paginator` object
	 * 3. Return that object to the controller
	 *
	 * @param integer $currentPage The current page (passed from controller)
	 *
	 * @return \Doctrine\ORM\Tools\Pagination\Paginator
	 */
	public function getFilteredFruits($currentPage, $name, $family)
	{
		// Create our query
		$query = $this->createQueryBuilder('f')
			->where("f.name = '" . $name . "'")
			->andwhere("f.family = '" . $family . "'")
			->orderBy('f.id', 'DESC')
			->getQuery();

		// No need to manually get get the result ($query->getResult())

		$paginator = $this->paginate($query, $currentPage);

		return $paginator;
	}
	
	public function getAllFavoriteFruits($currentPage)
	{
		// Create our query
		$query = $this->createQueryBuilder('f')
			->where("f.favorite = 1")
			->orderBy('f.id', 'DESC')
			->getQuery();

		// No need to manually get get the result ($query->getResult())

		$paginator = $this->paginate($query, $currentPage);

		return $paginator;
	}
	
	public function addToFavorites($id, $val)
	{
		$count = $this->findCountByFavorites();
		echo $count;
		echo $val;
		
		if(($count < 10 && $val=='true') || ($count >= 10 && $val=='false')){
			echo 'int';
			$fruit = $this->findOneById($id);
			$newval = $fruit->isFavorite() == 1 ? 0 : 1;
			$queryBuilder = $this->createQueryBuilder('f');
			$query = $queryBuilder->update()
					->set('f.favorite', $newval)
					->where('f.id = ' . $id)
					->getQuery();
			$result = $query->execute();	
			return "Fruit added to favorites!";
		} else if($count >= 10){
			return "You can have only 10 favorite fruits!";
		}
	}

	/**
	 * Paginator Helper
	 *
	 * Pass through a query object, current page & limit
	 * the offset is calculated from the page and limit
	 * returns an `Paginator` instance, which you can call the following on:
	 *
	 *     $paginator->getIterator()->count() # Total fetched (ie: `5` posts)
	 *     $paginator->count() # Count of ALL posts (ie: `20` posts)
	 *     $paginator->getIterator() # ArrayIterator
	 *
	 * @param Doctrine\ORM\Query $dql   DQL Query Object
	 * @param integer            $page  Current page (defaults to 1)
	 * @param integer            $limit The total number per page (defaults to 5)
	 *
	 * @return \Doctrine\ORM\Tools\Pagination\Paginator
	 */
	public function paginate($dql, $page = 1, $limit = 5)
	{
		$paginator = new Paginator($dql);

		$paginator->getQuery()
			->setFirstResult($limit * ($page - 1)) // Offset
			->setMaxResults($limit); // Limit

		return $paginator;
	}
    /**
     * @return Fruit[] Returns an array of Fruit objects
     */
    public function findByExampleField($value): array
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findOneBySomeField($value): ?Fruit
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
	
	public function findOneById($value): ?Fruit
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.id = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
	
	public function findCountByFavorites(): ?int
    {
		return $this->createQueryBuilder('f')
            ->select('count(f.id)')
			->where('f.favorite = 1')
            ->getQuery()
            ->getSingleScalarResult();
        ;
    }
}
