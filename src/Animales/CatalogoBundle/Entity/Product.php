<?php

namespace Animales\CatalogoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Animales\CatalogoBundle\Entity\ProductRepository")
 */
class Product
{
// Relation ===============================
    /**
     * @ORM\ManyToOne(targetEntity="SubCategory", inversedBy="products")
     * @ORM\JoinColumn(name="subcategory_id", referencedColumnName="id")
     */
    protected $subcategory;

    /**
     * @ORM\ManyToOne(targetEntity="Images", inversedBy="products", cascade={"persist"})
     * @ORM\JoinColumn(name="image_id", referencedColumnName="id")
     */
    protected $image;

// endrelations============================

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
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var integer
     *
     * @ORM\Column(name="subcategory_id", type="integer")
     */
    private $subcategoryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ean13", type="integer")
     */
    private $ean13;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


// Methods ======================

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
     * @return Product
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
     * @return Product
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
     * Set subcategoryId
     *
     * @param integer $subcategoryId
     * @return Product
     */
    public function setSubcategoryId($categoryId)
    {
        $this->subcategoryId = $subcategoryId;
    
        return $this;
    }

    /**
     * Get subcategoryId
     *
     * @return integer 
     */
    public function getSubcategoryId()
    {
        return $this->subcategoryId;
    }

    /**
     * Set ean13
     *
     * @param integer $ean13
     * @return Product
     */
    public function setEan13($ean13)
    {
        $this->ean13 = $ean13;
    
        return $this;
    }

    /**
     * Get ean13
     *
     * @return integer 
     */
    public function getEan13()
    {
        return $this->ean13;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
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
     * Set category
     *
     * @param \Animales\CatalogoBundle\Entity\SubCategory $category
     * @return Product
     */
    public function setSubcategory(\Animales\CatalogoBundle\Entity\SubCategory $subcategory = null)
    {
        $this->subcategory = $subcategory;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \Animales\CatalogoBundle\Entity\SubCategory 
     */
    public function getSubcategory()
    {
        return $this->subcategory;
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
