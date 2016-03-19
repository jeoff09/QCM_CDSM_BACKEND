<?php
namespace TactFactory\WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TactFactory\WebServiceBundle\Entity\Question;

class QuestionRestController extends Controller
{
  public function getQuestionAction($que){
    $question = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:Question')->findOneByname($que);
    if(!is_object($question)){
      throw $this->createNotFoundException();
    }
    return $question;
  }
  
  public function getQuestionsAction()
  {
  	$questions = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:Question')->findAll();

  	
  	return $questions;
  }
}