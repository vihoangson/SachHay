<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
    private $em;
    public function __construct(){
        parent::__construct();
        if(count($this->doctrine->em->getRepository("Entity\Book")->findAll())==0){
            $this->add_book();
        }
        $this->em = $this->doctrine->em;
    }

    public function index(){
        $repoBook = $this->em->getRepository("Entity\Book");
        $rs       = $repoBook->getAllBookArrays();
        $this->load->view('homepage', ["rs"=>$rs]);
    }

    public function add_book(){
        $book = new Entity\Book;
        $book->setName("Bí mật của sự may mắn");
        $this->em->persist($book);
        $this->em->flush();
    }

}
/* End of file homepage.php */
/* Location: ./application/controllers/homepage.php */
