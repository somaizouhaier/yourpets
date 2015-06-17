<?php

namespace atn\MediaBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\AbstractType;

class addImageFormType extends AbstractType {

    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('description', 'text', array(
                    'label' => 'Description',
                    'attr' => array('maxlength' => '50'),
                    'required' => true
                ))
                ->add('file', 'file', array('label' => 'Photo de l\'image'));
              
    }
    

    public function getName() {
        return 'atn_media_image_add';
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'atn\MediaBundle\Entity\Media'
        ));
    }

}
