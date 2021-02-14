<?php
declare(strict_types=1);


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    /**
     * @Route("/book/add", name="book_add_view")
     */
    public function addNewBook()
    {
        return $this->render('book/add.html.twig');
    }

    /**
     * @Route("/book/delete", name="book_delete_view")
     */
    public function deleteBook()
    {
        return $this->render('book/delete.html.twig');
    }

    /**
     * @Route("/book/update", name="book_update_view")
     */
    public function updateBook()
    {
        return $this->render('book/update.html.twig');
    }

    /**
     * @Route("/book/find", name="book_find_by_id")
     */
    public function findById()
    {
        return $this->render('book/findById.html.twig');
    }

    /**
     * @Route("/book/showall", name="book_show_all")
     */
    public function showAllBooks()
    {
        return $this->render('book/showAll.html.twig');
    }
}