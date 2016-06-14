<?php
namespace Entity;
/**
 *
 *
 * @Entity
 * @Table(name="Category")
 *
 */
class Category
{

	/**
	 * @Id
	 * @Column(type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @Column(type="string", length=255, nullable=false)
	 */
	protected $name;

	/**
	 * @Column(type="string", length=64, nullable=false)
	 */
	protected $description="";

    /**
     * @OneToMany(targetEntity="Book", mappedBy="category")
     */
    private $book;



    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @param mixed $name the name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the value of description.
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the value of description.
     *
     * @param mixed $description the description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets the value of book.
     *
     * @return mixed
     */
    public function getBook()
    {
        return $this->book;
    }

    /**
     * Add users
     *
     * @param Entity\User $users
     * @return Group
     */
    public function addBook(\Entity\Book $book)
    {
        $this->book[] = $book;
        return $this;
    }

}