<?php
namespace TactFactory\WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TactFactory\WebServiceBundle\Entity\Answer;

class AnswerRestController extends Controller
{
  public function getAnswerAction($ans){
    $answer = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:Answer')->findOneByname($ans);
    if(!is_object($answer)){
      throw $this->createNotFoundException();
    }
    return $answer;
  }
  
  public function getAnswersAction()
  {
  	$answers = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:Answer')->findAll();
  	
  	return $answers;
  }
  
  /*
   * return all answers by question
   */
  public function getAnswersquestionAction($question_id)
  {
  	
  	$answers = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:Answer')->findByquestion($question_id);
  
  	
  	return $answers;
  }
}