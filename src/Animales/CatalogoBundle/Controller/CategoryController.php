<?php

namespace Animales\CatalogoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Animales\CatalogoBundle\Entity\Category;

/**
 * Category controller.
 *
 * @Route("/categoria")
 */
class CategoryController extends Controller
{

    /**
     * Lists all Category entities.
     *
     * @Route("/", name="category")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AnimalesCatalogoBundle:Category')->getCacheCategories();
        
        return array(
            'entities' => $entities,
        );
    }

    
    
     
}
