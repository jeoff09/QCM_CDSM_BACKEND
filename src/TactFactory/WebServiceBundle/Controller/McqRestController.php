<?php
namespace TactFactory\WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TactFactory\WebServiceBundle\Entity\MCQ;

class McqRestController extends Controller
{
  public function getMcqAction($name){
    $mcq = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:MCQ')->findOneByname($name);
    if(!is_object($mcq)){
      throw $this->createNotFoundException();
    }
    return $mcq;
  }
  
  public function getMcqsAction()
  {
  	$mcqs = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:MCQ')->findAll();

  	
  	return $mcqs;
  }
}