<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Pagination\Paginator;

use App\Entity\Fruit;

class HomeController extends AbstractController
{
	public function __construct(EntityManagerInterface $entityManager)
    {
        // 3. Update the value of the private entityManager variable through injection
        $this->entityManager = $entityManager;

        //parent::__construct();
    }
	
    /**
     * @Route("/home", name="home")
     */
    public function index($page = 1)
    {
		
		$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
		// ... get fruits from DB...
		$fruits = null;
		$message = "";
		// Controller Action
		if($_POST != null && isset($_POST['fruit'])){
			$fruits = $this->entityManager->getRepository(Fruit::class)->getFilteredFruits($currentPage, $_POST['fruit']['name'], $_POST['fruit']['family']); // Returns 5 fruits out of 20
		} 
		if($fruits == null || $fruits->count() == 0){
			$fruits = $this->entityManager->getRepository(Fruit::class)->getAllFruits($currentPage); // Returns 5 fruits out of 20	
		}
		
		if($_POST != null && isset($_POST['id'])){
			$message = $this->entityManager->getRepository(Fruit::class)->addToFavorites($_POST['id'], $_POST['val']);
			if($message == 'You can have only 10 favorite fruits!'){
				echo $message;
			}
			
		}

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
		return $this->render('home/index.html.twig', compact('fruits', 'message', 'maxPages', 'thisPage'));
    }
}