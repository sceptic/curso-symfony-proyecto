<?php
namespace Animales\CatalogoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Animales\CatalogoBundle\Entity\Category;
use User\ZoneBundle\Entity\User;

class LoadCategoryData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $this->loadCategory($manager);
        $this->loadUser($manager);

        $manager->flush();
    }

    /**
     * Category fixtures
     */
    private function loadCategory(ObjectManager $manager){

        $acuario = new Category();
        $acuario->setId(1);
        $acuario->setName('Acuariofilia');
        $acuario->setSlug('acuariofilia');
        $manager->persist($acuario);
        /*-----------------------------------*/
        $perros_gatos = new Category();
        $perros_gatos->setId(2);
        $perros_gatos->setName('Acuariofia');
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
        $userAdmin->setPassword('adrian');
        $userAdmin->setEmail('adrian@mail.com');
        $userAdmin->setToken('adrian');
        $userAdmin->setActive(1);

        $manager->persist($userAdmin);
    }





}