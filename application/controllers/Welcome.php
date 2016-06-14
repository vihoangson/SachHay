<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->index2();
		return;
		$this->load->library('doctrine');

		$group = new Entity\UserGroup;
		$group->setName('Users');

		$user = new Entity\User;
		$user->setUsername('wildlyinaccurate');
		$user->setPassword('Passw0rd');
		$user->setEmail('wildlyinaccurate@gmail.com');
		$user->setGroup($group);

		// When you have set up your database, you can persist these entities:
		// $em = $this->doctrine->em;
		// $em->persist($group);
		// $em->persist($user);
		// $em->flush();

		$this->load->view('welcome_message', array(
			'user' => $user,
			'group' => $group,
		));
	}

	public function index2()
	{
		
		$this->load->library('doctrine');
		$group = new Entity\UserGroup;
		d($group->getUsers()->toArray());

		//============ ============  ============  ============ 

		$em = $this->doctrine->em;
		$groups = $em->getRepository("Entity\UserGroup")->findAll();
		foreach ($groups as $key => $value) {
			$user = $value->getUsers();
			foreach ($user as $key2 => $value2) {
				echo $value2->getId();
			}
		}

		//============ ============  ============  ============ 

		$user = $em->getRepository("Entity\User")->findAll();
		foreach ($user as $key => $value) {
			d($value->getGroup()->getName());
		}

		//$this->create_book();
		$books = $this->doctrine->em->getRepository("Entity\Book")->findAll();
		foreach ($books as $key => $value) {
			echo $value->getName()."<br>";
		}

		// ============ ============  ============  ============
		// Tạo book và lấy repository mới
		// $this->create_book();
		// $this->getCustomeRepository();
		// ============ ============  ============  ============

	}

	public function getCustomeRepository(){
		echo $this->doctrine->em->getRepository("Entity\User")->single();
	}

	public function create_book(){
		$this->load->library('doctrine');
		$book = new Entity\Book;
		$book->setName("Bi mat cua su may man2");
		$this->doctrine->em->persist($book);
		$this->doctrine->em->flush();
	}
}
