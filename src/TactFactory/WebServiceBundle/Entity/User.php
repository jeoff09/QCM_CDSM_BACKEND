<?php

namespace TactFactory\WebServiceBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="TactFactory\WebServiceBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected  $id;
    
    /**
    * @ORM\ManyToMany(targetEntity="TactFactory\WebServiceBundle\Entity\MCQ", cascade={"persist"})
    */
    private $mcqs;
    /**
     * @ORM\ManyToMany(targetEntity="TactFactory\WebServiceBundle\Entity\TypeUsers", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
	private $typeUser;
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
    	parent::__construct();
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

    /**
     * Set typeUser
     *
     * @param \TactFactory\WebServiceBundle\Entity\TypeUsers $typeUser
     * @return User
     */
    public function setTypeUser(\TactFactory\WebServiceBundle\Entity\TypeUsers $typeUser)
    {
        $this->typeUser = $typeUser;

        return $this;
    }

    /**
     * Get typeUser
     *
     * @return \TactFactory\WebServiceBundle\Entity\TypeUsers 
     */
    public function getTypeUser()
    {
        return $this->typeUser;
    }

    /**
     * Add typeUser
     *
     * @param \TactFactory\WebServiceBundle\Entity\TypeUsers $typeUser
     * @return User
     */
    public function addTypeUser(\TactFactory\WebServiceBundle\Entity\TypeUsers $typeUser)
    {
        $this->typeUser[] = $typeUser;

        return $this;
    }

    /**
     * Remove typeUser
     *
     * @param \TactFactory\WebServiceBundle\Entity\TypeUsers $typeUser
     */
    public function removeTypeUser(\TactFactory\WebServiceBundle\Entity\TypeUsers $typeUser)
    {
        $this->typeUser->removeElement($typeUser);
    }
}
