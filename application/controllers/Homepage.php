<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
	public function __construct(){
		parent::__construct();
		//echo $this->doctrine->em->getRepository("Entity\Book")->single();
	}

    public function index(){

        $rssss = $this->doctrine->em->find("Entity\Book",1);
        $this->load->view('homepage', ["rssss"=>$rssss]);

    }
}
/* End of file homepage.php */
/* Location: ./application/controllers/homepage.php */
