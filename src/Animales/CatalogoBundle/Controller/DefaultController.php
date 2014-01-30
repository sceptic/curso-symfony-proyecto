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
    	$category = $this->getRepo()
                         ->findAllCategories();

	    if (!$category) {
	        throw $this->createNotFoundException('No hay categorias');  
	    }
        $t = $this->get('test_service');
        $t_= $t->testing();
        return array('page' => 'home', 'category'=> $category, 'debug_var'=>$category, 'test'=>$t_);    
    }


    /**
     * @Route("/animales/{slug}", name="animales")
     * @Route("/animales/{slug}/{error}", name="animales_error")
     * @Template()
     * categoria
     */
    public function categoriaAction($slug, $error=null )
    {
    	//slug categorias
    	$category = $this->getRepo()
        ->findAllCategory($slug);

        $params = array('page' => $slug, 'category'=> $category, 'debug_var'=>$category);

        if($error)
    	{
    		$params['warning'] = "Catálogo no encontrado";
    	}
   
	    if (!$category) {
	      //return $this->redirect($this->generateUrl('home'));
	    }	

        return $params;
    }


    /**
     * @Route("/productos/{slug}", name="productos")
     * @Template()
     * catalogo
     */
    public function catalogoAction($slug)
    {
    	//slug subcategorias
    	$products = $this->getRepo()
    					 ->findSubCategoryProducts($slug);
    	if($products)
        	return array('page' => 'productos', 'products'=> $products, 'debug_var'=>$products );
    	else
    		return $this->redirect($this->generateUrl('home'));

    }


    /**
     * @Route("/logout", name="logout")
     * catalogo
     */
    public function logoutAction(){}
    


// Métodos privados 
// ================
    /**
     * Get repository method
     */
    private function getRepo(){
    	$this->clearCacheApc();
    	return $this->get('model.catalogo');
    }

    /**
	 * Clear apc cache 
     */
    private function clearCacheApc(){
    	apc_clear_cache();
    }

}
