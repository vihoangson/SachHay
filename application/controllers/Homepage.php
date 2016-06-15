<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
    public function __construct(){
        parent::__construct();
        //echo $this->doctrine->em->getRepository("Entity\Book")->single();
        $this->add_book();
    }

    public function index(){
        $rs = $this->doctrine->em->getRepository("Entity\Book")->findAll();
        $this->load->view('homepage', ["rs"=>$rs]);
    }

    public function add_book(){
        $book = new Entity\Book;
        $book->setName("Bí mật của sự may mắn");
        $this->doctrine->em->persist($book);
        $this->doctrine->em->flush();
    }
}
/* End of file homepage.php */
/* Location: ./application/controllers/homepage.php */
