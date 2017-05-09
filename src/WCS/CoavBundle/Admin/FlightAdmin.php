<?php
// src/WCS/CoavBundle/Admin/FlightAdmin.php

namespace WCS\CoavBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class FlightAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('pilot')
            ->add('freeSeats')
            ->add('takeofTime')
            ->add('departure')
            ->add('arrival')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('pilot')
            ->add('takeofTime')
            ->add('departure')
            ->add('arrival')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('takeofTime')
            ->addIdentifier('departure')
            ->addIdentifier('arrival')
            ->add('pilot')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('pilot')
            ->add('freeSeats')
            ->add('takeofTime')
            ->add('departure')
            ->add('arrival')
        ;
    }
}