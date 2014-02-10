<?php

namespace User\ZoneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserEditType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
             ->add('name', 'text')
             ->add('email', 'email')
             ->add('active','choice', array(
                           'choices'   => array('NO ACTIVO', 'ACTIVO')))
             ->add('role','choice', array(
                           'choices'   => array('ROLE_ADMIN'=>'ROLE_ADMIN', 'ROLE_USUARIO'=>'ROLE_USUARIO')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'User\ZoneBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'user_zonebundle_user';
    }
}
