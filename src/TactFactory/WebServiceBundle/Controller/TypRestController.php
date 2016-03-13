<?php
namespace TactFactory\WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TactFactory\WebServiceBundle\Entity\Typ;

class TypRestController extends Controller
{
  public function getTypAction($name){
    $typ = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:Typ')->findOneByname($name);
    if(!is_object($typ)){
      throw $this->createNotFoundException();
    }
    return $typ;
  }
  
  public function getTypsAction()
  {
  	$typs = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:Typ')->findAll();

  	
  	return $typs;
  }
}