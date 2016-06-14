<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function index()
	{
		$rs = $this->doctrine->em->find("Entity\Book",1);
		var_dump($rs);

	}

}

/* End of file homepage.php */
/* Location: ./application/controllers/homepage.php */