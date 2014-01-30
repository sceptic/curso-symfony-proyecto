<?php
namespace Admin\SettingsBundle\Event;

use Animales\Catalogo\Entity\Product;
use Admin\SettingsBundle\Event\ProductEvent;


class ProductListener{

	private $logger;
	public function __construct($logger){
		$this->logger = $logger;
		// Limpiar cache;
	}

	public function onProductCreate(ProductEvent $e){
		
    	$this->logger->info('ZZZZZZZZZZZZZZZZZS:'.$e->getProduct()->getName().' END::::');
    	apc_clear_cache();

	}	
	
}
