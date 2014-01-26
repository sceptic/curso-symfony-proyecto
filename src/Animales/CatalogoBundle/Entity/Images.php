<?php
namespace Animales\CatalogoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\Common\Collections\ArrayCollection;
use Animales\CatalogoBundle\Entity\SubCategory;
use Animales\CatalogoBundle\Entity\Product;


/**
 * Images
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Images
{
// Relations ===========================
    /**
     * @ORM\OneToMany(targetEntity="SubCategory", mappedBy="image")
     */
    protected $subcategories;

    /**
     * @ORM\OneToMany(targetEntity="Product", mappedBy="image")
     */
    protected $products;

// endrelations ========================

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
     * @Assert\Image(
     *     mimeTypes = {"image/*"},
     *     mimeTypesMessage = "Tiene que ser una imágen",
     *     maxSize="6000000",
     *     minWidth = 200,
     *     maxWidth = 500,
     *     minHeight = 200,
     *     maxHeight = 500,
     *     mimeTypesMessage = "Este archivo no es una imagen válida.",
     *     maxWidthMessage = "El ancho de la imagen es demasiado grande.",
     *     minWidthMessage = "El ancho de la imagen es demasiado pequeño.",
     *     maxHeightMessage = "La altura de la imagen es demasiado grande.",
     *     minHeightMessage = "La altura de la imagen es demasiado pequeña.")
     */
    private $file;

// Methods ==============================    

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subcategories = new ArrayCollection();
        $this->products = new ArrayCollection();
    }
//
    /**
     * Add subcategories
     *
     * @param \Animales\CatalogoBundle\Entity\SubCategory $subcategories
     * @return Category
     */
    public function addSubCategory(SubCategory $subcategories)
    {
        $this->subcategories[] = $subcategories;
    
        return $this;
    }

    /**
     * Remove subcategories
     *
     * @param \Animales\CatalogoBundle\Entity\SubCategory $subcategories
     */
    public function removeSubCategory(SubCategory $subcategories)
    {
        $this->subcategories->removeElement($subcategories);
    }

    /**
     * Get subcategories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubCategory()
    {
        return $this->subcategories;
    }

//
    /**
     * Add products
     *
     * @param \Animales\CatalogoBundle\Entity\Product $products
     * @return Category
     */
    public function addProduct(Product $products)
    {
        $this->products[] = $products;
    
        return $this;
    }

    /**
     * Remove products
     *
     * @param \Animales\CatalogoBundle\Entity\Product $products
     */
    public function removeProduct(Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProduct()
    {
        return $this->products;
    }

//
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;

    /**
     * Set path
     *
     * @param string $path
     * @return SubCategory
     */
    public function setPath($path)
    {
        $this->path = $path;
    
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }


    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads';
    }


    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
        $this->upload();

    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }


    public function upload()
    {
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }

        // use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and then the
        // target filename to move to
        $this->getFile()->move(
            $this->getUploadRootDir(),
            $this->getFile()->getClientOriginalName()
        );

        // set the path property to the filename where you've saved the file
        $this->path = $this->getFile()->getClientOriginalName();

        // clean up the file property as you won't need it anymore
        $this->file = null;
    }

    public function __toString()
    {
        return $this->name;
    }

    
}