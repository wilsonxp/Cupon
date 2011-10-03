<?php

/*
 * (c) Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * This file is part of the Cupon sample application.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Este archivo pertenece a la aplicación de prueba Cupon.
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Cupon\TiendaBundle\Form\Extranet;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

/**
 * Formulario para crear y manipular entidades de tipo Tienda.
 * Como se utiliza en la extranet, algunas propiedades de la entidad
 * no se incluyen en el formulario.
 */
class TiendaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('login', 'text', array('read_only' => true))
            
            ->add('password', 'repeated', array(
                'type' => 'password',
                'invalid_message' => 'Las dos contraseñas deben coincidir',
                'options' => array('label' => 'Contraseña'),
                'required' => false
            ))
            
            ->add('descripcion')
            ->add('direccion')
            ->add('ciudad')
        ;
    }

    public function getName()
    {
        return 'cupon_tiendabundle_tiendatype';
    }
}