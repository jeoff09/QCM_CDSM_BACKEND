<?php
namespace TactFactory\WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TactFactory\WebServiceBundle\Entity\User;

class UserRestController extends Controller
{
  public function getUserAction($username){
    $user = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:User')->findOneByUsername($username);
    if(!is_object($user)){
      throw $this->createNotFoundException();
    }
    return $user;
  }
  
  public function getUsersAction()
  {
  	$users = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:User')->findAll();

  	
  	return $users;
  }
}