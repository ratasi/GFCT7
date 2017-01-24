<?php

namespace gesGfctBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;

class profesoresType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre',TextType::class,array('label'=>'Nombre Profesor : ',

            ->add('direccion',TextType::class,array('label'=>'Apellidos : ',


            ->add('cp',IntegerType::class,array('label'=>'Departamento : ',


            ->add('guardar',SubmitType::class,array('label'=>'Guardar',
            'attr'=>array('class'=>'buttonG')))

            ->add('borrar',ResetType::class,array('label'=>'Borrar',
            'attr'=>array('class'=>'buttonB')))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'gesGfctBundle\Entity\Profesores'
        ));
    }
}
