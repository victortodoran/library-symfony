<?php


namespace App\Controller;

use App\Entity\Book;
use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Controller\BookController;

class TestControler extends BookController
{
    private \App\Controller\BookController $bookControler;

    public function __construct (
        BookController $bookController
    ){
        $this->bookControler = $bookController;
    }

    public function execute()
    {
        $book = $this->readBook();
        $this->bookControler->addNewBook($book);
    }

    protected function readBook(): Book
    {
        $isbn = readline("Please insert ISBN: ");
        $author = readline("Please insert author name: ");
        $title = readline("Please insert title: ");
        return new Book(null, $isbn, $author, $title);
    }

}