<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;

class CasosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->idciudad = $options['idciudad'];
        $builder
        ->add('noCaso')
        ->add('fechaCaso', DateTimeType::class, array(
          "data" => new \DateTime("now")
        ))
        ->add('asunto')
        ->add('pruebasCaso')
        ->add('asignatarioCaso')
        ->add('estadoCaso' , ChoiceType::class,array(
          "label" => "Estado del caso: ",
          "choices"=> array(
            "Inactivo" => 0,
            "Activo" => 1,
          )
        ))
        ->add('idDemandante', EntityType::class,array(
          "class" => "AppBundle:Demandantes",
          "label" => "Demandante: ",
          "query_builder" => function (EntityRepository $er){
            return $er->createQueryBuilder('demandante')
            ->where('demandante.idCiudad = :ciudad')
            ->setParameter('ciudad', $this->idciudad);
            }
        ))
        ->add('idDemandado')
        ->add('idEstudiante')
        ->add('idTribunal')
        ->add('idPersona', EntityType::class,array(
          "class" => "AppBundle:Personas",
          "label" => "Asesor: ",
          "query_builder" => function (EntityRepository $er){
            return $er->createQueryBuilder('persona')
            ->innerJoin('AppBundle:Bufetes', 'b', Join::WITH, 'persona.idBufete = b.idBufete')
            ->where('persona.role = :rol')
            ->andWhere('b.idCiudad = :ciudad')
            ->setParameter('rol', 'ROLE_ASESOR')
            ->setParameter('ciudad', $this->idciudad);
            }
        ))
        //->add('idTipo')
        ->add('laborales', 'AppBundle\Form\LaboralesType', array(
            'label' => 'Laborales',
        ))
        ;
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Casos',
            'idciudad' => null,
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
