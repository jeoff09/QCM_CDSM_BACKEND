<?php

namespace Admin\AdminBundle\SonataAdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class QuestionAdmin extends Admin
{
	// setup the defaut sort column and order
	protected $datagridValues = array(
			'_sort_order' => 'DESC',
			'_sort_by' => 'que'
	);
	
	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
		->add('que')
		->add('mcq',null, array('label' => "Questionnaire"))
		->add('media',null, array('label' => "Media"))
		;
	}
	
	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
		$datagridMapper
		->add('mcq',null, array('label' => "Questionnaire"))
		;
	}
	
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
		->add('que')
		->add('mcq')
		->add('media')
		->add('answers')
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
		->add('que')
		->add('mcq')
		->add('media')
		->add('answers')
		->add('createdAt')
		->add('updatedAt')
		;
	}
}