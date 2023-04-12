<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Pagination\Paginator;

use App\Entity\Fruit;

class FruitController extends AbstractController
{
	public function __construct(EntityManagerInterface $entityManager)
    {
        // 3. Update the value of the private entityManager variable through injection
        $this->entityManager = $entityManager;

        //parent::__construct();
    }
	
    #[Route('/fruit', name: 'fruit')]
    public function index($page = 1): Response
    {
		
		$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
		// ... get fruits from DB...
		$fruits = null;
		$message = "";
		$fruits = $this->entityManager->getRepository(Fruit::class)->getAllFavoriteFruits($currentPage); // Returns 5 fruits out of 20	

		// You can also call the count methods (check PHPDoc for `paginate()`)
		# Total fetched (ie: `5` fruits)
		$totalFruitsReturned = $fruits->getIterator()->count();

		# Count of ALL fruits (ie: `20` fruits)
		$totalFruits = $fruits->count();

		# ArrayIterator
		$iterator = $fruits->getIterator();
		//$fruits = $this->entityManager->getRepository(Fruit::class)->findAll();
		/*return $this->render('home/index.html.twig', [
            'fruits' => $fruits
        ]);*/
		
		$limit = 5;
		$maxPages = ceil($fruits->count() / $limit);
		$thisPage = $page;
		// Pass through the 3 above variables to calculate pages in twig
		return $this->render('fruit/index.html.twig', compact('fruits', 'message', 'maxPages', 'thisPage'));
    }
}
