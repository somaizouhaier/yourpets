<?php

// src/Acme/DemoBundle/Form/Type/FriendMessageFormType.php

namespace atn\AnimalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class AddAnimalFormType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('pseudo', 'text')
                ->add('description', 'textarea')
                ->add('type', 'entity', array(
                    'class' => 'atnAnimalBundle:RaceAnimal',
                    'property' => 'labelle',
                    'query_builder' => function(EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                                ->where('u.id_type is NULL');
                    },))
                ->add('race', 'entity', array(
                    'class' => 'atnAnimalBundle:RaceAnimal',
                    'property' => 'labelle',
                    'query_builder' => function(EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                                ->where('u.id_type is not NULL');
                    },))
                
                ->add('file', 'file', array('label' => 'Photo de profil'))
                ->add('dateNaissance', 'date', array(
                    'widget' => 'single_text',
                    'input' => 'datetime',
                    'format' => 'dd/MM/yyyy',
                    'attr' => array('class' => 'date'),
                ))
        ;
      //  $builder->add('race', 'entity',$formOptions);
    }

    public function getName() {
        return 'atn_animal_add';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'atn\AnimalBundle\Entity\Animal'
        ));
    }

}
