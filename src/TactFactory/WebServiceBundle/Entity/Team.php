<?php

namespace TactFactory\WebServiceBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table(name="team")
 * @ORM\Entity(repositoryClass="TactFactory\WebServiceBundle\Repository\TeamRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Team 
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
    private  $mcqs;
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
     * Constructor
     */
    public function __construct()
    {
        $this->mcqs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add mcqs
     *
     * @param \TactFactoryWebServiceBundle\Entity\MCQ $mcqs
     * @return Team
     */
    public function addMcq(\TactFactory\WebServiceBundle\Entity\MCQ $mcqs)
    {
        $this->mcqs[] = $mcqs;

        return $this;
    }

    /**
     * Remove mcqs
     *
     *@param \TactFactoryWebServiceBundle\Entity\MCQ $mcqs
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
     * @ORM\PreUpdate
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Team
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
     * @return Team
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = new  \DateTime();
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
}
