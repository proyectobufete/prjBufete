<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CasocivilType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('noCaso')
        ->add('fechaCaso')
        ->add('asunto')
        ->add('pruebasCaso')
        ->add('asignatarioCaso')
        ->add('estadoCaso')
        ->add('idDemandante')
        ->add('idDemandado')
        ->add('idEstudiante')
        ->add('idTribunal')
        ->add('idPersona')
        ->add('idTipo')
        ->add('civiles', 'AppBundle\Form\CivilesType', array(
            'label' => 'Civiles',
        ))
        ;
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Casos'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_casos';
    }


}
