<?php
namespace TactFactory\WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TactFactory\WebServiceBundle\Entity\Result;
use TactFactory\WebServiceBundle\Json_Entity\Result_Json;
use Symfony\Component\HttpFoundation\Response;

use JMS\Serializer\SerializerBuilder;
use FOS\RestBundle\Tests\Fixtures\User;
use Proxies\__CG__\TactFactory\WebServiceBundle\Entity\MCQ;

class ResultRestController extends Controller {
	
	
	public function postResultAction()
	{
		$jsonData = $this->getRequest()->get('result');
		$result = new Result();
		$mcq = new  MCQ();
		$score = 0;
		$serializerBuilder = new  SerializerBuilder();
		
		$serializer = $serializerBuilder::create()->build();
				
		$result_mcq = $serializer->deserialize($jsonData, 'TactFactory\WebServiceBundle\Json_Entity\Result_Json', 'json');

		$id_serv_user = $result_mcq->getIdServerUser();
		$id_serv_mcq = $result_mcq->getIdServerMcq();
		$id_serv_answers = $result_mcq->getListIdServerAnswer();
		
		$user = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:User')->findOneByid($id_serv_user);
		$mcq = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:MCQ')->findOneByid($id_serv_mcq);
		//getQuestion MCQ
		$list_questions_mcq = $mcq->getQuestions();
		
		
		foreach ($list_questions_mcq as $question)
		{
			$list_answers_true =  Array();
			$list_answers_wrong =  Array();
			
			foreach ($question->getAnswers() as $answer)
			{	
				if($answer->getIsTrue() == 1)
				{
					array_push($list_answers_true, $answer->getId());
				}else {
					array_push($list_answers_wrong, $answer->getId());
				}
			}
			
			print_r(count($list_answers_wrong));
			$countAnswerTrue = 0;
			$errorAnswerFalse = 0;
			
			foreach ($list_answers_true as $answerTrue)
			{
				foreach ($id_serv_answers as $id_answer)
				{
					if($answerTrue == $id_answer)
					{
						$countAnswerTrue = $countAnswerTrue + 1;
					}
				}
			}
			
			foreach ($list_answers_wrong as $answerWrong)
			{
			
				foreach ($id_serv_answers as $id_answer)
				{
					if($answerWrong == $id_answer)
					{
						$errorAnswerFalse = $errorAnswerFalse + 1;
					}
						
				}
			}

			if($countAnswerTrue == count($list_answers_true) && $errorAnswerFalse == 0)
			{
				$score = $score + 1 ;
			}
		}
		
		// récupèrer la question ensuite récupère les id ou l'id de la réponses bonne si dan la liste  + 1 si en case de double réponse 1 seule seulement 0 
		// get IDAnswer QUestion 
		//si answer dans la list +1 sinon 0 
		$em = $this->getDoctrine()->getManager();
		
		$result->setScore($score);
		$result->setMcq($mcq);
		$result->setUsr($user);
		$result->setIsCompleted(true);

    	// tells Doctrine you want to (eventually) save the Product (no queries yet)
    	$em->persist($result);

    	// actually executes the queries (i.e. the INSERT query)
   	 	$em->flush();
		return true;
	}
	
	public function getResultAction()
	{
		$result_json = new  Result_Json();
		$serializerBuilder = new  SerializerBuilder();
		$serializer = $serializerBuilder::create()->build();
		
		$result_json->setId(1);
		$result_json->setIdServerMcq(1);
		$result_json->setIdServerUser(1);
		$result_json->addListIdServerAnswer(1);
		$result_json->addListIdServerAnswer(4);
		$result_json->addListIdServerAnswer(11);
		$result_json->addListIdServerAnswer(13);
		$jsonData =  $serializer->serialize($result_json,'json');
		$this->postResultAction($jsonData);
		
		return $jsonData;
		
		
	}
	
}