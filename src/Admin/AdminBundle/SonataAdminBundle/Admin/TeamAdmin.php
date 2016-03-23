<?php

namespace Admin\AdminBundle\SonataAdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TeamAdmin extends Admin
{
// setup the default sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'ASC',
        '_sort_by' => 'name',
    	'_sort_by' => 'updatedAt',
    	'_sort_by' => 'createdAt'
    );
 
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('mcqs')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('_action', 'actions', array(
            		'actions' => array(
            				'view' => array(),
            				'edit' => array(),
            				'delete' => array(),
            		)
            ))
        ;
    }
    
    protected function configureShowFields(ShowMapper $showMapper)
    {
    	$showMapper
    	->add('name')
    	->add('mcqs', null, array('label' => "Questionnaires"))
    	->add('createdAt')
    	->add('updatedAt')
    	;
    }
}