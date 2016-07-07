<?php

namespace Admin\AdminBundle\SonataAdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ResultAdmin extends Admin
{
// setup the defaut sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'DESC',
        '_sort_by' => 'score',
    	'_sort_by' => 'usr',
    	'_sort_by'=> 'mcq',
    	'_sort_by'=> 'createdAt',
    	'_sort_by'=> 'updatedAt'
    );
 
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('score')
            ->add('isCompleted')
            ->add('mcq', null, array('label' => "Questionnaire"))
            ->add('usr', null, array('label' => "utilisateur"))
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('score')
            ->add('usr')
            ->add('mcq', null, array('label' => "Questionnaire"))
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('usr')
            ->add('score')
            ->add('isCompleted')
            ->add('mcq')
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
            ->add('score')
            ->add('isCompleted')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('mcq', null, array('label' => "Questionnaire"))
            ->add('usr', null, array('label' => "utilisateur"))
        ;
    }
}