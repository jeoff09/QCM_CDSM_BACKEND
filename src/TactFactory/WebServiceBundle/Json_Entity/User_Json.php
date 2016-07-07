<?php
 
 namespace TactFactory\WebServiceBundle\Json_Entity;
 
 use JMS\Serializer\Annotation\Type;
 

 class User_Json {
 
 	/**
 	 * @Type("integer")
 	 */
 	private $id;
 
 	/**
 	 * @Type("string")
 	 */
 	private $username;
 	
 	/**
 	 * @Type("string")
 	 */
 	private $email;
 	
 	/**
 	 * @Type("DateTime")
 	 */
 	private $lastlogin;
 	
 	/**
 	 * User's updated date
 	 * @Type("DateTime")
 	 */
 	private $updatedAt;
 	
 	public function getId() {
 		return $this->id;
 	}
 	public function setId($id) {
 		$this->id = $id;
 		return $this;
 	}
 	public function getUsername() {
 		return $this->username;
 	}
 	public function setUsername($username) {
 		$this->username = $username;
 		return $this;
 	}
 	public function getEmail() {
 		return $this->email;
 	}
 	public function setEmail($email) {
 		$this->email = $email;
 		return $this;
 	}
 	public function getLastlogin() {
 		return $this->lastlogin;
 	}
 	public function setLastlogin($lastlogin) {
 		$this->lastlogin = $lastlogin;
 		return $this;
 	}
 	public function getUpdatedAt() {
 		return $this->updatedAt;
 	}
 	public function setUpdatedAt($updatedAt) {
 		$this->updatedAt = $updatedAt;
		return $this;
 	}
 	
 	/**
 	 * UserJson class constructor
 	 */
 	public function  __construct(){}
 
 
 
 } 