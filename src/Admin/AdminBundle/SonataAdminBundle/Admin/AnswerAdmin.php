<?php

namespace Admin\AdminBundle\SonataAdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AnswerAdmin extends Admin
{
 // setup the defaut sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'DESC',
        '_sort_by' => 'createdAt',
    	'_sort_by' => 'updatedAt',
    	'_sort_by'=> 'question'
    );
 
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('ans')
            ->add('isTrue')
            ->add('question', null, array('label' => "question liee"))
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('ans')
            ->add('isTrue')
            ->add('question', null, array('label' => "question liee"))
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('ans')
            ->add('isTrue')
            ->add('question')
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
            ->add('question', null, array('label' => "question liee"))
            ->add('ans')
            ->add('isTrue')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }}