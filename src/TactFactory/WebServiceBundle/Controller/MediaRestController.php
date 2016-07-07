<?php
namespace TactFactory\WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TactFactory\WebServiceBundle\Entity\Media;

class MediaRestController extends Controller
{
  public function getMediaAction($name){
    $media = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:Media')->findOneByname($name);
    if(!is_object($media)){
      throw $this->createNotFoundException();
    }
    return $media;
  }
  
  public function getMediasAction()
  {
  	$medias = $this->getDoctrine()->getRepository('TactFactoryWebServiceBundle:Media')->findAll();

  	
  	return $medias;
  }
}