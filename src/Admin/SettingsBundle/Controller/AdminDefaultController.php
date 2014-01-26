<?php
namespace Admin\SettingsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Animales\CatalogoBundle\Entity\Images;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/xadmin")    
 */
class AdminDefaultController extends Controller
{
    /**
     * @Route("/home")
     * @Route("/home/{name}")
     * @Template()
     * 
     */
    public function indexAction($name='')
    {
        // Recuperar categorias
        
        // Recuperar Subcategorias numero productos

        // Recuperar productos  

        return array('page'=>'home','name' => "<strong>".$name."</strong>");
    }
    

}
