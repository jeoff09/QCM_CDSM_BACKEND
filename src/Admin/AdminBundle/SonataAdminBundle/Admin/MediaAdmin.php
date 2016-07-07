<?php

namespace Admin\AdminBundle\SonataAdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use TactFactory\WebServiceBundle\Entity\Media;


class MediaAdmin extends Admin
{
 // setup the defaut sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'DESC',
        '_sort_by' => 'createdAt',
    	'_sort_by'=>'typ'
    );
 
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('url')
            ->add('typ', null, array('label' => "type de media"))
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('typ', null, array('label' => "type de media"))
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('url')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('typ')
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
            ->add('typ', null, array('label' => "type de media"))
            ->add('url')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }
}