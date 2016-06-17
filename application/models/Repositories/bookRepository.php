<?php
namespace Repositories;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;

class BookRepository extends EntityRepository {

    public function getAllBookArrays()
    {
        return $this->getEntitymanager()->createQueryBuilder()
            ->select('b')
            ->from('Entity\Book', 'b')
            ->orderBy('b.id', 'DESC')
            ->getQuery()
            ->getArrayResult();
    }

    public function getBookArrayById($id)
    {
        return $this->getEntitymanager()->createQueryBuilder()
            ->select('b')
            ->from('Entity\Book', 'b')
            ->where('b.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult(Query::HYDRATE_ARRAY);
    }
}
