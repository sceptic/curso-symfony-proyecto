<?php

namespace Animales\CatalogoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * SubCategory
 *
 * @ORM\Table(name="subcategory")
 * @ORM\Entity(repositoryClass="Animales\CatalogoBundle\Entity\SubCategoryRepository")
 */
class SubCategory
{
//  Relation properties:

    /**
     * @ORM\OneToMany(targetEntity="Product", mappedBy="subcategory")
     */
    protected $products; 

    /**
     * @Assert\NotNull()
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="subcategories", cascade={"persist"})
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;


    /**
     * @Assert\NotNull()
     * @ORM\ManyToOne(targetEntity="Images", inversedBy="subcategories", cascade={"persist"})
     * @ORM\JoinColumn(name="image_id", referencedColumnName="id")
     */
    protected $image;

// endrelation ==========================================

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
     * @var integer
     * @ORM\Column(name="category_id", type="integer")
     * 
     */
    private $categoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=300)
     * @Assert\NotNull()
     * @Assert\Length(
     *      min = "5",
     *      max = "300",
     *      minMessage = "Debe tener {{ limit }} caracteres de largo como mínimo",
     *      maxMessage = "No puede tener más de {{ limit }} caracteres de largo")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

// Methods ========================

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return SubCategory
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
     * Set categoryId
     *
     * @param integer $categoryId
     * @return SubCategory
     */
    public function setCategoryId( $categoryId = 1)
    {
        $this->categoryId = $categoryId;
    
        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return SubCategory
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return SubCategory
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
     * Add products
     *
     * @param \Animales\CatalogoBundle\Entity\Product $products
     * @return SubCategory
     */
    public function addProduct(\Animales\CatalogoBundle\Entity\Product $products)
    {
        $this->products[] = $products;
    
        return $this;
    }

    /**
     * Remove products
     *
     * @param \Animales\CatalogoBundle\Entity\Product $products
     */
    public function removeProduct(\Animales\CatalogoBundle\Entity\Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set category
     *
     * @param \Animales\CatalogoBundle\Entity\Category $category
     * @return SubCategory
     */
    public function setCategory(\Animales\CatalogoBundle\Entity\Category $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \Animales\CatalogoBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * Set image
     *
     * @param \Animales\CatalogoBundle\Entity\Images $image
     * @return SubCategory
     */
    public function setImage(\Animales\CatalogoBundle\Entity\Images $image = null)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return \Animales\CatalogoBundle\Entity\Images 
     */
    public function getImage()
    {
        return $this->image;
    }    


    public function __toString()
    {
        return $this->name;
    }
}