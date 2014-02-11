<?php
namespace Animales\CatalogoBundle\Model;


class Catalogo{
	

	private $namespace;
	private $container;

    public function __construct($container, $namespace){
    	$this->container = $container;
		$this->namespace = $namespace;
	}

// Category Repo
//==============
	public function findAllCategories(){
		return $this->getRepo('Category')->findAllCategories();
	}


// Subcategory Repo
//==============
	public  function findAllCategory($slug){
		return $this->getRepo('SubCategory')->findAllCategory($slug);
	} 


	public  function findAllCS($slug){
		return $this->getRepo('SubCategory')->findAllCS($slug);
	} 


	public  function findSubCategoryProducts($slug){
		return $this->getRepo('SubCategory')->findSubCategoryProducts($slug);
	}


// Product Repo
//=============
	public function getAllProducts(){
		return $this->getRepo('SubCategory')->getAllProducts();
	}



// Private Methods:
// ================
	/**
     * Return repository
	 */
	private function getRepo($entity){
		return $this->container->get("doctrine")->getRepository($this->namespace.':'.$entity);
	}



}
