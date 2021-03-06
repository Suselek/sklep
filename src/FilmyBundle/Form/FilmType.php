<?php

namespace FilmyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FilmType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tytul')
            ->add('opis')
            ->add('cena')
            ->add('oceny', null, array('attr' => array('style'=> 'display:none'), 'label_attr' => array('style'=> 'display:none')))
            ->add('zamowienia', null, array('attr' => array('style'=> 'display:none'), 'label_attr' => array('style'=> 'display:none')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FilmyBundle\Entity\Film'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'filmybundle_film';
    }
}
