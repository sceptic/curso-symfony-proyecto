<?php
namespace Animales\CatalogoBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Animales\CatalogoBundle\Entity\CategoryRepository")
 */
class Category
{

    /**
     * @ORM\OneToMany(targetEntity="SubCategory", mappedBy="category")
     */
    protected $subcategories;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\NotNull()
     * @Assert\Length(
     *      min = "3",
     *      max = "50",
     *      minMessage = "Debe tener {{ limit }} caracteres de largo como mínimo",
     *      maxMessage = "No puede tener más de {{ limit }} caracteres de largo")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     * @Assert\NotNull()
     * @Assert\Length(
     *      min = "3",
     *      max = "50",
     *      minMessage = "Debe tener {{ limit }} caracteres de largo como mínimo",
     *      maxMessage = "No puede tener más de {{ limit }} caracteres de largo")
     */
    private $slug;


    /**
     * Set id
     *
     * @param integer $id
     * @return Category
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Category
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subcategories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add subcategories
     *
     * @param \Animales\CatalogoBundle\Entity\SubCategory $subcategories
     * @return Category
     */
    public function addSubcategory(\Animales\CatalogoBundle\Entity\SubCategory $subcategories)
    {
        $this->subcategories[] = $subcategories;
    
        return $this;
    }

    /**
     * Remove subcategories
     *
     * @param \Animales\CatalogoBundle\Entity\SubCategory $subcategories
     */
    public function removeSubcategory(\Animales\CatalogoBundle\Entity\SubCategory $subcategories)
    {
        $this->subcategories->removeElement($subcategories);
    }

    /**
     * Get subcategories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubcategories()
    {
        return $this->subcategories;
    }

    public function __toString() 
    {
        return $this->name;
    }
}