<?php

namespace atn\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ProfileFormType extends BaseType {

    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('firstName', 'text', array(
                    'label' => 'Nom',
                    'attr' => array('maxlength' => '50'),
                    'required' => true
                ))
                ->add('lastName', 'text', array('label' => 'Prénom', 'attr' => array('maxlength' => '50')));
              
    }
    

    public function getName() {
        return 'atn_user_profile';
    }

}
