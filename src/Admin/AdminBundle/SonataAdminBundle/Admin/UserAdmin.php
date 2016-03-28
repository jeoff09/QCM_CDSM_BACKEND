<?php

namespace Admin\AdminBundle\SonataAdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class UserAdmin extends Admin
{
// setup the default sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'ASC',
        '_sort_by' => 'username',
    	'_sort_by' => 'updatedAt',
    	'_sort_by' => 'createdAt',
    	'_sort_by' => 'teams'
    );
 
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username')
            ->add('email')
            ->add('password')
            ->add('roles')
            ->add('teams',null, array('label' => "Groupes"))
            ->add('mcqs',null, array('label' => "Questionnaires"))
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('username')
            ->add('roles')
            ->add('teams',null, array('label' => "Groupes"))
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('username')
            ->add('email')
            ->add('roles')
            ->add('teams')
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
    	->add('username')
    	->add('email')
    	->add('roles')
    	->add('password')
    	->add('teams',null, array('label' => "Groupes"))
    	->add('mcqs', null, array('label' => "Questionnaires"))
    	->add('createdAt')
    	->add('updatedAt')
    	;
    }
}