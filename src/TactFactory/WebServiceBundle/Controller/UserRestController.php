<?php
namespace TactFactory\WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TactFactory\WebServiceBundle\Entity\User;
use TactFactory\WebServiceBundle\Entity\MCQ;
use TactFactory\WebServiceBundle\Entity\Team;

class UserRestController extends Controller
{  
public function getUserAction($username){
        $user = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:User')->findOneByUsername($username);
        $mcqUser = array();
        $mcqTeam = array();
        
        $team = new Team();
        
        // get the list of Team 
        $teams = $user->getTeams();
        
        // get the list of mcq_id into my teams
        foreach ($teams as $team)
        {
        	
	        foreach ($team->getMcqs() as $mcq)
	        {
	            array_push($mcqTeam, $mcq->getId());
	            
	        }
		}
        // get the list of mcq_id into my user
        foreach ($user->getMcqs() as $mcq){
            array_push($mcqUser, $mcq->getId());
        }
        
        // if we have diffrence in this 2 two add the diff in user mcq 
        $diff = array();
        
        $diff = array_diff($mcqTeam, $mcqUser);
        
        foreach ($diff as $mcq_id){
        $user->AddMcq($this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:MCQ')->findOneById($mcq_id));
        }
        
        if(!is_object($user)){
            throw $this->createNotFoundException();
        }
        return $user;
}
    
  public function getMcquserAction($user_id)
  {
  		 $user = new User();
  		 $user = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:User')->findOneById($user_id);
  		
  		$mcqs = $user->getMcqs();
  		
  	return $mcqs;
  }

}