<?php


namespace App\Controller;

use App\Entity\Book;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WordGenerator extends AbstractController
{


    /**
     * @Route ("/populate" , name="populate_random_words")
     */
    public function populate():Response{

        $initialBooks = array (
            array("Ion Creanga", "Amintiri din Copilarie", '123456'),
            array("Liviu Rebreanu", "Padurea Spanzuratilor", '54123'),
            array("Daniel Defoe", "Robinson Crusoe", '98745'),
            array("Mihai Eminescu", "Poezii", '91235'),
            array("George Orwell", "Big Brother", '564575'),

        );

        for ($row=0; $row <= 4; $row++)
            {

                    $entityManager = $this->getDoctrine()->getManager();
                    $book = new Book();
                    $book->setAuthor($initialBooks[$row][0]);
                    $book->setTitle($initialBooks[$row][1]);
                    $book->setIsbn($initialBooks[$row][2]);
                    $entityManager->persist($book);
                    $entityManager->flush();

            }

        return new Response('Entries Added');



//        $entityManager = $this->getDoctrine()->getManager();
//
//        $book = new Book();
//        $book->setAuthor('Liviu Rebreanu');
//        $book->setTitle('Padurea Spanzuratilor');
//        $book->setIsbn('54123');
//        $entityManager->persist($book);
//        $entityManager->flush();
//        return new Response('New entry saved with ' . $book->getId());
    }


//    public function wordgenerator()
//    {
//        $fn = fopen("App/Controller/words.txt","r");
//        $words = [];
//        while(! feof($fn))
//        {
//            $result = fgets($fn);
//            $words[] = $result;
//            fclose($fn);
//        }
//        return $words[random_int(1,1000)];
//    }

}


