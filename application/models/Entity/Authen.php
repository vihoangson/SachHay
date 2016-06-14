<?php
namespace Entity;
/**
 *
 *
 * @Entity
 * @Table(name="authen")
 *
 */
class Authen
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
     * @OneToMany(targetEntity="Book", mappedBy="authen")
     */
    private $book;

}
