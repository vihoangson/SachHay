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
        $this->response([1,231,241,24,12,41,24,12,4]);
    }

    function index_put()
    {
        $this->response([1,231,23333333341,24,12,41,24,12,4]);
    }

}

/* End of file Book.php */
/* Location: ./application/controllers/api/Book.php */