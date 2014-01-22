<?php

namespace Animales\CatalogoBundle\Util;


class Twig{

	private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

	public function navData(){

        $container = $this->container;

        return $container->get("doctrine")
        			     ->getRepository('AnimalesCatalogoBundle:Category')
                         ->findAllCategories();      
	}
}