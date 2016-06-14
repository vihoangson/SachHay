# Đây là dự án thử nghiệm doctrine trên Codeigniter

> $this->load->library('doctrine');
> 
> $book = new Entity\Book;
> 
> $book->setName("Bi mat cua su may man2");
> 
> $this->doctrine->em->persist($book);
> 
> $this->doctrine->em->flush();


# Install

** Bước 1:**

> composer install

** Bước 2:**

> php application/doctrine orm:schema-tool:create
> 
> php application/doctrine orm:schema-tool:drop -f
> 
> php application/doctrine orm:schema-tool:update -f

#Lưu ý phần này

> @Entity(repositoryClass="Entity\UserRepository")

D:\xampp\htdocs\vhosts\sachhay.opp.vn.dev.vn\application\models\Entity\User.php

Tạo custome repository cho entity


# Command tạo proxies cho các quan hệ trong doctrine

> php application\doctrine.php orm:generate:proxies