<?php

namespace colpatria\folmularioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormularioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nit','text',array("required"=>true,'attr' =>array( 'class' => 'form-control','onchange'=>'myFunction()')))
            ->add('primerNombre','text',array("required"=>true,'attr' =>array( 'class' => 'form-control')))
            ->add('primerApellido','text',array("required"=>true,'attr' =>array( 'class' => 'form-control')))
            ->add('segundoNombre','text',array("required"=>true,'attr' =>array( 'class' => 'form-control')))
            ->add('segundoApellido','text',array("required"=>true,'attr' =>array( 'class' => 'form-control')))
            ->add('telefonoFijo','text',array("required"=>true,'attr' =>array( 'class' => 'form-control')))
            ->add('telefonoCelular','text',array("required"=>true,'attr' =>array( 'class' => 'form-control')))
            ->add('razonSocial','text',array("required"=>true,'attr' =>array( 'class' => 'form-control')))
            ///Creacion de la lista desplegable 
            ->add('departamento','hidden',array("required"=>true,'attr' =>array( 'class' => 'form-control'))) 
            ->add('ciudad','hidden',array("required"=>true,'attr' =>array( 'class' => 'form-control')))
            ->add('cedula','text',array("required"=>true,'attr' =>array( 'class' => 'form-control')))
            ->add('direccionEmpresa','text',array("required"=>true,'attr' =>array( 'class' => 'form-control')))
            ->add('Guardar','submit',array('attr' =>array('class'=>'btn btn-default','onclick'=>'return  comprobarForm()')));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'colpatria\folmularioBundle\Entity\Formulario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'colpatria_folmulariobundle_formulario';
    }
}
