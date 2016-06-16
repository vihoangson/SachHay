<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

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

    function index_post()
    {
        $this->response(["index_post"]);
    }

    function index_put()
    {
        $this->response(["index_put"]);
    }

}

/* End of file Book.php */
/* Location: ./application/controllers/api/Book.php */