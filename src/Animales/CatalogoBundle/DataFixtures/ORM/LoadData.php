<?php
namespace Animales\CatalogoBundle\DataFixtures\ORM;


use Animales\CatalogoBundle\Entity\Category;
use Animales\CatalogoBundle\Entity\Images;
use Animales\CatalogoBundle\Entity\SubCategory;
use Animales\CatalogoBundle\Entity\Product;
use User\ZoneBundle\Entity\User;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadData implements FixtureInterface, ContainerAwareInterface
{

    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }




    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $this->loadCategory($manager);
        $this->loadUser($manager);
        //$this->loadSubcategories($manager);

        $manager->flush();
    }

    /**
     * Category fixtures
     */
    private function loadCategory(ObjectManager $manager){

        $img = new Images();
        $img->setName("no Image")->setPath("no-image.jpg");
        $manager->persist($img);

        $acuario = new Category();
        $acuario->setId(1);
        $acuario->setName('Acuariofilia');
        $acuario->setSlug('acuariofilia');
        $manager->persist($acuario);

        $Acuario=new SubCategory();
        $Acuario->setName("Acuarios y mesas");
        $Acuario->setDescription("Acuarios, mesas y muebles para acuarios");
        $Acuario->setSlug("acuarios-y-mesas");
        $Acuario->setCategory($acuario); 
        $Acuario->setImage($img);    
        $manager->persist($Acuario);

        $prod=new Product();
        $prod->setName("Acuario");
        $prod->setDescription("Acuario sin imágen...");
        $prod->setEan13("0125472154");
        $prod->setSlug("acuario-1");
        $prod->setSubCategory($Acuario); 
        $prod->setImage($img);  
        $manager->persist($prod);


        /*-----------------------------------*/
        $perros_gatos = new Category();
        $perros_gatos->setId(2);
        $perros_gatos->setName('Perros y Gatos');
        $perros_gatos->setSlug('perros-y-gatos');
        $manager->persist($perros_gatos);
        /*-----------------------------------*/
        $reptiles = new Category();
        $reptiles->setId(3);
        $reptiles->setName('Reptiles');
        $reptiles->setSlug('reptiles');
        $manager->persist($reptiles);
        /*-----------------------------------*/
        $roedores = new Category();
        $roedores->setId(4);
        $roedores->setName('Roedores');
        $roedores->setSlug('roedores');
        $manager->persist($roedores);
        /*-----------------------------------*/
        $aves = new Category();
        $aves->setId(5);
        $aves->setName('Aves');
        $aves->setSlug('aves');
        $manager->persist($aves);
        /*-----------------------------------*/
    }

    /**
     * User fixture
     */
    private function loadUser(ObjectManager $manager){
        

        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setSalt(md5(uniqid()));

        $encoder = $this->container
            ->get('security.encoder_factory')
            ->getEncoder($userAdmin);

        $userAdmin->setUsername('admin');
        $password = $encoder->encodePassword('admin', $userAdmin->getSalt()); 
        $userAdmin->setPassword($password);
        $userAdmin->setEmail('admin@mail.com');
        $userAdmin->setRole('ROLE_ADMIN');
        $userAdmin->setActive(1);

        $manager->persist($userAdmin);
    }



    private function loadSubcategories(ObjectManager $manager){

        $Acuario=new SubCategory();
        $Acuario->setName("Acuarios y mesas");
        $Acuario->setDescription("Acuarios, mesas y muebles para acuarios");
        $Acuario->setSlug("acuarios-y-mesas");
        $Acuario->setCategoryId(1);
        
        $manager->persist($Acuario);
    }






}