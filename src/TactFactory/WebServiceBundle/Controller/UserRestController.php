<?php
namespace TactFactory\WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TactFactory\WebServiceBundle\Entity\User;
use TactFactory\WebServiceBundle\Entity\MCQ;
use TactFactory\WebServiceBundle\Entity\Team;
use TactFactory\WebServiceBundle\Json_Entity\User_Json;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;
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
  
  public function postUserauthAction(){
  	$login = $this->getRequest()->get('login');
  	$pwd = $this->getRequest()->get('password');
  	
  	$user_manager = $this->get('fos_user.user_manager');
  	$factory = $this->get('security.encoder_factory');  	
  	$user = $user_manager->findUserByUsername($login);

	if (is_null($user)){
  		$bool = false;
  		return $bool;
  	}
  	$encoder = $factory->getEncoder($user);
  	$bool = ($encoder->isPasswordValid($user->getPassword(),$pwd,$user->getSalt())) ? true : false;
  
  	return $bool;
  }
  /**
    * User flow information
    * @return json
   */
   public function postUserinformationAction(){
     $username = $this->getRequest()->get('username');
     $user = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:User')->findOneByUsername($username);

    
     //Create user with specific information to create json flow
     $userJson = new User_Json();
     $userJson->setId($user->getId());
     $userJson->setUsername($user->getUsername());
     $userJson->setEmail($user->getEmail());
     $userJson->setLastLogin($user->getLastLogin());
     $userJson->setUpdatedAt($user->getUpdatedAt());
     
      return $userJson;
    }
    
   /**
    * Not used
    * @param string $username
    */
   public function postUserProfilAction($username){
     $username = $this->getRequest()->get('username');
     $temp = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:User')->findOneByUsername($username);
     $user = new User();
     $user->setUsername($temp->getUsername());
     $user->setEmail($temp->getEmail());
     $user->setLastLogin($temp->getLastLogin());
     $user->setUpdatedAt($temp->getUpdatedAt());
     return $user;
   }

}