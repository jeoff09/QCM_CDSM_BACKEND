<?php
namespace TactFactory\WebServiceBundle\Json_Entity;

use JMS\Serializer\Annotation\Type;

 class Result_Json
{

	/**
	 * 
	 * @Type("integer")
	 */
	private  $id;
	
	/**
	 *
	 * @Type("integer")
	 */
	private  $id_server_user;
	
	/**
	 *
	 * @Type("integer")
	 */
	private  $id_server_mcq;
	
	/**
	 *
	 * @Type("array")
	 */
	private $list_id_server_answer;
	

	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	public function getIdServerUser() {
		return $this->id_server_user;
	}
	public function setIdServerUser( $id_server_user) {
		$this->id_server_user = $id_server_user;
		return $this;
	}
	public function getIdServerMcq() {
		return $this->id_server_mcq;
	}
	public function setIdServerMcq($id_server_mcq) {
		$this->id_server_mcq = $id_server_mcq;
		return $this;
	}
	public function getListIdServerAnswer() {
		return $this->list_id_server_answer;
	}
	public function setListIdServerAnswer($list_id_server_answer) {
		$this->list_id_server_answer = $list_id_server_answer;
		return $this;
	}
	
	public function addListIdServerAnswer($results)
	{
		$this->list_id_server_answer[] = $results;
	
		return $this;
	}
	
	public function  __construct()
	{
		$this->list_id_server_answer = new \Doctrine\Common\Collections\ArrayCollection();
	}
	
	
	
	
	
	
	
}