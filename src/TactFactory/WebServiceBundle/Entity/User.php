<?php

namespace TactFactory\WebServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="TactFactory\WebServiceBundle\Repository\UserRepository")
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
    * @ORM\ManyToMany(targetEntity="TactFactory\WebServiceBundle\Entity\MCQ", cascade={"persist"})
    */
    private $mcqs;

        /**
    * @ORM\ManyToMany(targetEntity="TactFactory\WebServiceBundle\Entity\Role", cascade={"persist"})
    */
    private $roles;

    /**
    * @ORM\OneToMany(targetEntity="TactFactory\WebServiceBundle\Entity\Result", mappedBy="usr")
    */
    private $results;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return User
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return User
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->mcqs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add mcqs
     *
     * @param \OC\PlatformBundle\Entity\MCQ $mcqs
     * @return User
     */
    public function addMcq(\TactFactory\WebServiceBundle\Entity\MCQ $mcqs)
    {
        $this->mcqs[] = $mcqs;

        return $this;
    }

    /**
     * Remove mcqs
     *
     * @param \OC\PlatformBundle\Entity\MCQ $mcqs
     */
    public function removeMcq(\TactFactory\WebServiceBundle\Entity\MCQ $mcqs)
    {
        $this->mcqs->removeElement($mcqs);
    }

    /**
     * Get mcqs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMcqs()
    {
        return $this->mcqs;
    }

    /**
     * Add roles
     *
     * @param \TactFactory\WebServiceBundle\Entity\Role $roles
     * @return User
     */
    public function addRole(\TactFactory\WebServiceBundle\Entity\Role $roles)
    {
        $this->roles[] = $roles;

        return $this;
    }

    /**
     * Remove roles
     *
     * @param \TactFactory\WebServiceBundle\Entity\Role $roles
     */
    public function removeRole(\TactFactory\WebServiceBundle\Entity\Role $roles)
    {
        $this->roles->removeElement($roles);
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Add results
     *
     * @param \TactFactory\WebServiceBundle\Entity\Result $results
     * @return User
     */
    public function addResult(\TactFactory\WebServiceBundle\Entity\Result $results)
    {
        $this->results[] = $results;

        return $this;
    }

    /**
     * Remove results
     *
     * @param \TactFactory\WebServiceBundle\Entity\Result $results
     */
    public function removeResult(\TactFactory\WebServiceBundle\Entity\Result $results)
    {
        $this->results->removeElement($results);
    }

    /**
     * Get results
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getResults()
    {
        return $this->results;
    }
}
