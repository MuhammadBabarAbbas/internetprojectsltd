<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

use Doctrine\ORM\EntityManagerInterface;
use App\Constroller\FruitController;
use App\Entity\Fruit;

use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;




class FruitsCommand extends Command
{
	
	public function __construct(EntityManagerInterface $entityManager)
    {
        // 3. Update the value of the private entityManager variable through injection
        $this->entityManager = $entityManager;

        parent::__construct();
    }
	
    // In this function set the name, description and help hint for the command
    protected function configure(): void
    {
        // Use in-build functions to set name, description and help

        $this->setName('fruits:fetch')
            ->setDescription('This command is used for getting all fruits from https://fruityvice.com/ and saving them into local DB (MySQL or PostgreSQL)')
            ->setHelp('Run this command to fetch fruits in the execute function.');
    }

    // write the code you want to execute when command runs
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
		$SUCCESSFUL_EXECUTION_CONDITION = false;
		$EXECUTION_FAILURE_CONDITION = false;
		$INVALID_EXECUTION_CONDITION = false;
		
		// If you want to write some output
        //$output->writeln('Pass the parameter' . $input->getArgument('fetch'));

        // Return below values according to the occurred situation
		
		$response = file_get_contents('https://fruityvice.com/api/fruit/all');
		$response = json_decode($response);
		if($response != null && sizeof($response) > 0){
			foreach($response as $res){
				$existingFruit = $this->entityManager->getRepository(Fruit::class)->find($res->id);
				if (!$existingFruit) {
					$fruit = new Fruit();
					$fruit->setId($res->id);
					$fruit->setName($res->name);
					$fruit->setFamily($res->family);
					$fruit->setOrdar($res->order);
					$fruit->setGenus($res->genus);
					$fruit->setNutritions(json_encode($res->nutritions));
					
					$this->entityManager->persist($fruit);
					// actually executes the queries (i.e. the INSERT query)
					$this->entityManager->flush();
				}
			}
			$SUCCESSFUL_EXECUTION_CONDITION = true;
		}
		

        if ($SUCCESSFUL_EXECUTION_CONDITION) {
			// Create a Transport object
			if(false){
				//$transport = Transport::fromDsn('smtp://username:password@hostname:port');
				$transport = Transport::fromDsn('smtp://USERNAME:PASSWORD@gmail');
		
				// Create a Mailer object
				$mailer = new Mailer($transport); 

				// Create an Email object
				$email = (new Email());

				// Set the "From address"
				$email->from('mbabbas@gmail.com');
				// Set the "From address"
				$email->to('mbabbas@gmail.com');

				// Set a "subject"
				$email->subject('Demo message using the Symfony Mailer library.');

				// Set the plain-text "Body"
				$email->text('This is the plain text body of the message.\nThanks,\nAdmin');

				// Send the message
				$mailer->send($email);	
			}
            // if everything is executed successfully with no issues then return SUCCESS as below
            return Command::SUCCESS;

        } elseif ($EXECUTION_FAILURE_CONDITION) {

            // if execution fails return FAILURE as below
            return Command::FAILURE;

        } elseif ($INVALID_EXECUTION_CONDITION) {

            // if invalid things happens i.e. invalid arguments etc. then return INVALID as below
            return Command::INVALID;

        }
    }
}