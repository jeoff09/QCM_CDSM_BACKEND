<?php

namespace Admin\AdminBundle\SonataAdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class MCQAdmin extends Admin
{
 // setup the defaut sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'DESC',
        '_sort_by' => 'name',
    	'_sort_by' => 'dateEnd',
    	'_sort_by' => 'category'
    );
 
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('duration')
            ->add('dateEnd')
            ->add('dateStart')
            ->add('isActif')
            ->add('category',null, array('label' => "Categorie"))
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name') 
            ->add('duration')
            ->add('category',null, array('label' => "Categorie"))
            ->add('questions',null, array('label' => "Liste de questions"))
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('duration')
            ->add('dateEnd')
            ->add('dateStart')
            ->add('isActif')
            ->add('questions')
            ->add('category')
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
 			->add('duration')
            ->add('dateEnd')
            ->add('dateStart')
            ->add('isActif')
            ->add('category',null, array('label' => "Categorie"))
            ->add('questions', null, array('label' => "Liste de questions"))
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }
}