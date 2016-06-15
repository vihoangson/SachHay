<?php
namespace Entity;
use Doctrine\ORM\EntityRepository;
/**
 *
 *
 * @Entity
 * @Table(name="Book")
 * @Entity(repositoryClass="Entity\BookRepository")
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
     * @Column(type="string", length=255, nullable=true)
     */
    protected $image="";

    /**
     * @ManyToOne(targetEntity="Category")
     * @JoinColumn(name="cat_id", referencedColumnName="id")
     */
    protected $category;

    /**
     * @ManyToOne(targetEntity="Authen")
     * @JoinColumn(name="authen_id", referencedColumnName="id")
     */
    protected $authen;

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

    public function setCat_id($cat_id)
    {
        $this->cat_id= $cat_id;
        return $this;
    }

    public function getCat_id()
    {
        return $this->cat_id;
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

    public function setCategory(Category $category){
        $this->category = $category;
    }

    public function getCategory(){
        return $this->category;
    }

    /**
     * Gets the value of image.
     *
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the value of image.
     *
     * @param mixed $image the image
     *
     * @return self
     */
    protected function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

}


class BookRepository extends EntityRepository
{
    public function single()
    {
        return 123;
    }


}
