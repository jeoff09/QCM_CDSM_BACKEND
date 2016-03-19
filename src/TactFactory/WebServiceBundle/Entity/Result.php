<?php

namespace TactFactory\WebServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;

/**
 * Result
 *
 * @ORM\Table(name="result")
 * @ORM\Entity(repositoryClass="TactFactory\WebServiceBundle\Repository\ResultRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ExclusionPolicy("All")
 */
class Result
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
     * @var int
     *
     * @ORM\Column(name="score", type="integer")
     */
    private $score;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_completed", type="boolean")
     */
    private $isCompleted;

     /**
     * @ORM\ManyToOne(targetEntity="TactFactory\WebServiceBundle\Entity\MCQ", inversedBy="results")
     * @ORM\JoinColumn(nullable=false)
     */
    private $mcq;

     /**
     * @ORM\ManyToOne(targetEntity="TactFactory\WebServiceBundle\Entity\User", inversedBy="results")
     * @ORM\JoinColumn(nullable=false)
     */
    private $usr;
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
     * Set score
     *
     * @param integer $score
     * @return Result
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set isCompleted
     *
     * @param boolean $isCompleted
     * @return Result
     */
    public function setIsCompleted($isCompleted)
    {
        $this->isCompleted = $isCompleted;

        return $this;
    }

    /**
     * Get isCompleted
     *
     * @return boolean 
     */
    public function getIsCompleted()
    {
        return $this->isCompleted;
    }

    /**
     * Set mcq
     *
     * @param \TactFactory\WebServiceBundle\Entity\MCQ $mcq
     * @return Result
     */
    public function setMcq(\TactFactory\WebServiceBundle\Entity\MCQ $mcq)
    {
        $this->mcq = $mcq;

        return $this;
    }

    /**
     * Get mcq
     *
     * @return \TactFactory\WebServiceBundle\Entity\MCQ 
     */
    public function getMcq()
    {
        return $this->mcq;
    }

    /**
     * Set usr
     *
     * @param \TactFactory\WebServiceBundle\Entity\User $usr
     * @return Result
     */
    public function setUsr(\TactFactory\WebServiceBundle\Entity\User $usr)
    {
        $this->usr = $usr;

        return $this;
    }

    /**
     * Get usr
     *
     * @return \TactFactory\WebServiceBundle\Entity\User 
     */
    public function getUsr()
    {
        return $this->usr;
    }

    /**
     * @ORM\PreUpdate
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Result
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
     * @return Result
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt= new \DateTime();
        

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
