<?php
namespace Entity;
/**
 *
 *
 * @Entity
 * @Table(name="Book")
 *
 */
class Book
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
	 * @Column(type="integer", length=255, nullable=false)
	 */
	protected $star=0;

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
     * Gets the value of star.
     *
     * @return mixed
     */
    public function getStar()
    {
        return $this->star;
    }

    /**
     * Sets the value of star.
     *
     * @param mixed $star the star
     *
     * @return self
     */
    public function setStar($star)
    {
        $this->star = $star;

        return $this;
    }
}
