<?php
namespace TactFactory\WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use TactFactory\WebServiceBundle\Controller\McqRestController;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use TactFactory\WebServiceBundle\Entity\User;
use TactFactory\WebServiceBundle\Entity\Team;
use TactFactory\WebServiceBundle\Entity\MCQ;
use TactFactory\WebServiceBundle\Entity\Category;

class CategoryRestController extends Controller
{
  public function getCategoryAction($name){
    $category = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:Category')->findOneByname($name);
    if(!is_object($category)){
      throw $this->createNotFoundException();
    }
    return $category;
  }
  
  public function getCategoryIdAction($id){
    $category = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:Category')->findOneByid($id);
    if(!is_object($category)){
      throw $this->createNotFoundException();
    }
    return $category;
  }
  
  public function getCategoriesAction(){
    $categories = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:Category')->findAll();
    return $categories;
  }
  
  public function postCategoriesuserAction(){
    
    $userId = $this->getRequest()->get('user_id');
    $categories = array();
    $mcqs = array();
    $tempMcqs = array();
    $teams = array();
    $tempMcq = new MCQ();
    // get User by id 
    $user = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:User')->findOneByid($userId);
    //get User Team
    $teams = $user->getTeams();
    if ($teams != null)
    {
      $tempMcqs = self::getMcqList($teams,$user);
      
      foreach ($tempMcqs as $mcq_id){
        $tempMcq = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:MCQ')->findOneById($mcq_id);
        array_push($mcqs, $tempMcq);
      }
    }
    else 
    {
      //Get Mcq's user
      foreach ($user->getMcqs() as $mcq){
        array_push($mcqs, $mcq);
      }
    }
    
    if($mcqs != null)
    {
      $categories = self::getCategoryList($mcqs);
    }
    
    return $categories;
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
  
  public function getCategoryList($mcqs)
  {
    $categories = array();
    $tempCategoryIds = array();
    $diff = array();
    
    if($mcqs != null)
    {
      foreach ($mcqs as $mcq)
      {
        array_push($tempCategoryIds, $mcq->getCategory()->getId());
      }
      
      $diff = array_unique($tempCategoryIds);
      
      foreach ($diff as $categ_id){
        $tempCateg = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:Category')->findOneById($categ_id);
        array_push($categories, $tempCateg);
      }
    }
    return $categories;
  }

}