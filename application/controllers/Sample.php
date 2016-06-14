<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends CI_Controller {
<<<<<<< HEAD:application/controllers/Sample.php
	public function __construct(){
		parent::__construct();
	}
=======
>>>>>>> e08e47fab74fcfc3ca6145edb1311de9a68c9e3e:application/controllers/Sample.php

	public function index()
	{
		$this->index2();
		return;

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
		$this->add_category();
	}


	/*
	* Đổi category của 1 book
	* 
	* @datecreate: 20160614060500
	*/
	public function change_category(){
		$category = $this->doctrine->em->find("Entity\Category",2);
		$book = $this->doctrine->em->find("Entity\Book",1);
		// Lưu ý quan trọng
		$book->setCategory($category);
		$this->doctrine->em->persist($book);
		$this->doctrine->em->flush();
	}


	/**
	* Tạo ra một category mới
	* 
	* @datecreate: 20160614060500
	*/
	public function create_category(){
		$category = new Entity\Category;
		$category->setName("hat giong tam hon");
		$this->doctrine->em->persist($category);
		$this->doctrine->em->flush();
	}

	/**
	* Sử dụng custome Repository
	* 
	* @datecreate: 20160614060500
	*/
	public function getCustomeRepository(){
		echo $this->doctrine->em->getRepository("Entity\User")->single();
	}

	/**
	 * Tạo ra một sách mới
	 * @return void
	 * 
	 * @datecreate: 20160614060500
	 */
	public function create_book(){
		$book = new Entity\Book;
		$book->setName("Bi mat cua su may man2");
		$this->doctrine->em->persist($book);
		$this->doctrine->em->flush();
	}
}
