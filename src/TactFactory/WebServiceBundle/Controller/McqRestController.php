<?php
namespace TactFactory\WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TactFactory\WebServiceBundle\Entity\MCQ;
use TactFactory\WebServiceBundle\Entity\Category;
use TactFactory\WebServiceBundle\Controller\CategoryRestController;
use TactFactory\WebServiceBundle\Entity\User;

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

  public function postMcqsuserAction(){
    $user_id = $this->getRequest()->get('user_id');
    $category_id = $this->getRequest()->get('categ_id');
    $user = new User();
    $tempMcq = new MCQ();
    $mcqs = array();
    $user_mcqs  = array();
    $tempIdMcqs = array();
     
    $user = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:User')->findOneById($user_id);
    $teams = $user->getTeams();

    if ($teams != null)
    {
        $tempIdMcqs = self::getMcqList($teams,$user);

        foreach ($tempIdMcqs as $mcq_id) {
          
          $tempMcq = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:MCQ')->findOneById($mcq_id);
          if($tempMcq->getCategory()->getId() == $category_id)
          {
            array_push($mcqs, $tempMcq);
          }
          else{

          }
        }
       
     }
     else{
       
          $user_mcqs = $user->getMcqs();

          foreach ($user_mcqs as $mcq) {
            
            if($mcq->getCategory()->getId() == $category_id)
            {
              array_push($mcqs, $mcq);
            }

          }

         }
       
     return $mcqs;
  }

   /**
   * Get user's mcq
   * @param array<Team> $teams
   * @param User $user
   * @return mcq's id list
   */
  public static function getMcqList($teams,$user)
  {
    $teamMcqs = array();
    $userMcqs = array();
    $diff = array();
    $temp = array();
    
    foreach ($teams as $team)
    {
      //Get Mcq's id in team to insert into a temp list
       foreach ($team->getMcqs() as $mcq)
      {
          //Insert Mcq's id in temporary list
          array_push($teamMcqs, $mcq->getId());
      }
    }
    
    //Get Mcq's id in user to insert into a temp list
    foreach ($user->getMcqs() as $mcq){
      array_push($userMcqs, $mcq->getId());
    }
    
    //Return list id mcqs for the User
    $temp = array_merge($userMcqs,$teamMcqs);
    $diff = array_unique($temp);
      
    //Add mcq in tempo list
    /*foreach ($diff as $mcq_id){
      $tempMcq = $this->getDoctrine()->getRepository('IIAWebServiceBundle:Mcq')->findOneById($mcq_id);
      array_push($mcqs, $tempMcq);
    }*/
    
    //return $mcqs;
    return $diff;
  }


}