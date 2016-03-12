<?php

namespace TactFactory\WebServiceBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="TactFactory\WebServiceBundle\Repository\UserRepository")
 * @ORM\HasLifecycleCallbacks()
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
	 * @ORM\ManyToMany(targetEntity="TactFactory\WebServiceBundle\Entity\Team")
	 * @ORM\JoinTable(name="fos_user_team",
	 *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
	 *      inverseJoinColumns={@ORM\JoinColumn(name="team_id", referencedColumnName="id")}
	 * )
	 */
	protected $teams;
	
    /**
    * @ORM\OneToMany(targetEntity="TactFactory\WebServiceBundle\Entity\Result", mappedBy="usr")
    */
    private $results;
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\PreUpdate
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return User
     */
    public function setUpdatedAt($updatedAt)
    {
         $this->updatedAt = new \DateTime();

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
     * @ORM\PrePersist
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return User
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
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
     * @param \TactFactory\WebServiceBundle\Entity\MCQ $mcqs
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
     * @param \TactFactory\WebServiceBundle\Entity\MCQ $mcqs
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
     * Add teams
     *
     * @param \TactFactory\WebServiceBundle\Entity\Team $teams
     * @return User
     */
    public function addTeam(\TactFactory\WebServiceBundle\Entity\Team $teams)
    {
        $this->teams[] = $teams;

        return $this;
    }

    /**
     * Remove teams
     *
     * @param \TactFactory\WebServiceBundle\Entity\Team $teams
     */
    public function removeTeam(\TactFactory\WebServiceBundle\Entity\Team $teams)
    {
        $this->teams->removeElement($teams);
    }

    /**
     * Get teams
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTeams()
    {
        return $this->teams;
    }
}
