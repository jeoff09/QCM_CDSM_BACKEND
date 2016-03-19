<?php
namespace TactFactory\WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TactFactory\WebServiceBundle\Entity\Team;

class TeamRestController extends Controller
{
  public function getTeamAction($name){
    $team = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:Team')->findOneByname($name);
    if(!is_object($team)){
      throw $this->createNotFoundException();
    }
    return $team;
  }
  
  public function getTeamsAction()
  {
  	$teams = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:Team')->findAll();

  	
  	return $teams;
  }
}