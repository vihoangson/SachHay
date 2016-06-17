<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

//============ ============  ============  ============ 
//============ ============  ============  ============ 
//  GET
// index_get
// Params:
//      Void
// Return
//      list all books
// POST
// ============ ============  ============  ============ 
// add_book_post
// Params:
//      $title
//      $description
// Return
//      list all books
// ============ ============  ============  ============ 
// remove_all_book_post
// Params:
//      Void
// Return
//      void
//============ ============  ============  ============ 
//============ ============  ============  ============ 

class Book extends REST_Controller {

    private $em = NULL;

    function __construct()
    {
        parent::__construct();
        // uncomment this line if not using CI auto load feature
        //$this->load->library('doctrine');
        
        $this->em = $this->doctrine->em;
    }

    function index_get()
    {
        $bookRepository = $this->em->getRepository('Entity\Book');
        $books = [];
        if (!$this->get('id'))
        {
            $books = $bookRepository->getAllBookArrays();
        }
        else 
        {
            $book = $bookRepository->getBookArrayById($this->get('id'));
            if ($book) $books[] = $book;
            else $this->response(NULL, 404);
        }
        $this->response($books);
    }

    public function add_book_post(){
        $book = new Entity\Book;
        $book->setName($this->input->post('title'));
        $book->setDescription($this->input->post('description'));
        $this->em->persist($book);
        $this->em->flush();
        //echo json_encode(["status"=>"Done"]);
        $this->index_get();
    }

    public function remove_all_book_post(){
        $obj_rm = $this->em->getRepository("Entity\Book")->findAll();
        foreach ($obj_rm as $key => $value) {
            $this->em->remove($value);
        }
        $this->em->flush();
        echo json_encode(["status"=>"Done"]);
    }

}

/* End of file Book.php */
/* Location: ./application/controllers/api/Book.php */