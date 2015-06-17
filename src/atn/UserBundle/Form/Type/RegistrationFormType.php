<?php

namespace atn\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('email', 'email', array(
//                    'label' => 'form.email', 
                    'label' => 'E-mail',
                    'attr' => array('maxlength' => '255'),
                    'translation_domain' => 'FOSUserBundle',
                    'required' => true,
                    'data' => 'somaizouhaier@gail.com'
                ))
                ->add('plainPassword', 'repeated', array(
                    'type' => 'password',
                    'options' => array('translation_domain' => 'FOSUserBundle'),
//                    'first_options' => array('label' => 'form.password'),
                    'first_options' => array('label' => 'Mot de passe', 'attr' => array('maxlength' => '255'), 'data' => 'boussarsar.omar@gmail.com'),
//                    'second_options' => array('label' => 'form.password_confirmation'),
                    'second_options' => array('label' => 'Confirmer le mot de passe', 'attr' => array('maxlength' => '255'), 'data' => 'boussarsar.omar@gmail.com'),
//                    'invalid_message' => 'fos_user.password.mismatch',
                    'invalid_message' => 'Les 2 mots de passes saisis sont différents',
                    'required' => true,
                ))
                ->add('firstName', 'text', array(
                    'label' => 'Nom',
                    'attr' => array('maxlength' => '50'),
                    'required' => true,
                    'data' => 'Zouhaier'
                ))
                ->add('lastName', 'text', array('label' => 'Prénom', 'attr' => array('maxlength' => '50'), 'data' => 'Somai'))
                ;
    }



    public function getName()
    {
        return 'atn_user_registration';
    }
}
