<?php

namespace Animales\CatalogoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller
{

/*RUTAS( home , animales, productos) */

    /**
     * @Route("/home", name="home")
     * @Template()
     * index
     */
    public function indexAction()
    {
    	apc_clear_cache();
    	$category = $this->getRepo('Category')
        ->findAllCategories();

	    if (!$category) {
	        throw $this->createNotFoundException('No hay categorias');  
	    }	
        return array('page' => 'home', 'category'=> $category, 'debug_var'=>$category);    
    }


    /**
     * @Route("/animales/{slug}", name="animales")
     * @Template()
     * categoria
     */
    public function categoriaAction($slug)
    {
    	//slug categorias
    	$category = $this->getRepo('Category')
        ->findAllCategory($slug);

	    if (!$category) {
	        throw $this->createNotFoundException(
	            'NO HAY '
	        );
	    }	
        return array('page' => $slug, 'category'=> $category, 'debug_var'=>$category);
    }


    /**
     * @Route("/productos/{slug}", name="productos")
     * @Template()
     * catalogo
     */
    public function catalogoAction($slug)
    {
    	apc_clear_cache();
    	//slug subcategorias
    	$products = $this->getRepo('SubCategory')
    					 ->findSubCategoryProducts($slug);
	    
        return array('page' => 'productos', 'productos'=> $products, 'debug_var'=>$products );
    }


// Métodos privados 
// ================
    /**
     * Get repository method
     */
    private function getRepo($entity){
    	return $this->getDoctrine()
        ->getRepository('AnimalesCatalogoBundle:'.$entity);
    }



    

}
