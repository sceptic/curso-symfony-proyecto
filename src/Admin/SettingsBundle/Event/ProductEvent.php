<?php
namespace Admin\SettingsBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Animales\CatalogoBundle\Entity\Product;


class ProductEvent extends Event{
	
	private $product;

	public function __construct(Product $product){
	
		$this->product = $product;

	}

	public function getProduct(){
		return $this->product;
	}

}