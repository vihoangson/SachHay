<?php 
namespace Entity;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function single()
    {
        return 123;
    }
}

 ?>