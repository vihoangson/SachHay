<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
    private $em;
    public function __construct(){
        parent::__construct();
        $this->em = $this->doctrine->em;
        if(count($this->doctrine->em->getRepository("Entity\Book")->findAll())==0){
            $this->add_book();
        }
    }

    public function index(){
        echo create_form();
        var_dump(1);die;
        $repoBook = $this->em->getRepository("Entity\Book");
        $rs       = $repoBook->getAllBookArrays();
        $this->load->view('_includes/header');
        $this->load->view('homepage', ["rs"=>$rs]);
        $this->load->view('_includes/footer');
    }

    public function add_book(){
        $book = new Entity\Book;
        $book->setName("Bí mật của sự may mắn");
        $this->em->persist($book);
        $this->em->flush();
        echo json_encode(["status"=>"Done"]);
    }

    public function remove_all_book(){
        $obj_rm = $this->em->getRepository("Entity\Book")->findAll();
        foreach ($obj_rm as $key => $value) {
            $this->em->remove($value);
        }
        $this->em->flush();
        echo json_encode(["status"=>"Done"]);
    }

}
/* End of file homepage.php */
/* Location: ./application/controllers/homepage.php */
