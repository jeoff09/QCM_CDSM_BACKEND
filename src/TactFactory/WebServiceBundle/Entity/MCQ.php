<?php

namespace TactFactory\WebServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\PreUpdate;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * MCQ
 *
 * @ORM\Table(name="m_c_q")
 * @ORM\Entity(repositoryClass="TactFactory\WebServiceBundle\Repository\MCQRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ExclusionPolicy("All")
 */
class MCQ
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Expose()
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     * @Expose
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="datetime", nullable=true)
     * @Expose()
     */
    private $dateEnd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="datetime")
     * @Expose()
     */
    private $dateStart;

    /**
     * @var int
     *
     * @ORM\Column(name="duration", type="smallint")
     * @Expose()
     */
    private $duration;

     /**
     * @ORM\ManyToOne(targetEntity="TactFactory\WebServiceBundle\Entity\Category", inversedBy="mcqs")
     * @ORM\JoinColumn(nullable=false)
     * @Expose()
     */
    private $category;

     /**
    * @ORM\OneToMany(targetEntity="TactFactory\WebServiceBundle\Entity\Question", mappedBy="mcq",cascade={"remove"})
    * @Expose()
    */
    private $questions;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     * @Expose()
     */
    private $updatedAt;

         /**
    * @ORM\OneToMany(targetEntity="TactFactory\WebServiceBundle\Entity\Result", mappedBy="mcq")
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
     * @return MCQ
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    /**
    * @var bool
    *
    * @ORM\Column(name="is_Actif", type="boolean")
    * @Expose
    */
   private $isActif;

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
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     * @return MCQ
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime 
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     * @return MCQ
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime 
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return MCQ
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }
    
    /** Set is_Actif
    *
    * @param boolean $isActif
    * @return MCQ
    */
    public function setIsActif($isActif)
    {
    	$this->isActif = $isActif;
    
    	return $this;
    }
    
    /**
     * Get is_Actif
     *
     * @return boolean
     */
    public function getIsActif()
    {
    	return $this->isActif;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @ORM\PrePersist
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return MCQ
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = new  \DateTime();
        $this->updatedAt = new  \DateTime();

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
     * @ORM\PreUpdate
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return MCQ
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
        return $this->updatedAt ;

        
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add questions
     *
     * @param \TactFactory\WebServiceBundle\Entity\Question $questions
     * @return MCQ
     */
    public function addQuestion(\TactFactory\WebServiceBundle\Entity\Question $questions)
    {
        $this->questions[] = $questions;

        return $this;
    }

    /**
     * Remove questions
     *
     * @param \TactFactory\WebServiceBundle\Entity\Question $questions
     */
    public function removeQuestion(\TactFactory\WebServiceBundle\Entity\Question $questions)
    {
        $this->questions->removeElement($questions);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Set category
     *
     * @param \TactFactory\WebServiceBundle\Entity\Category $category
     * @return MCQ
     */
    public function setCategory(\TactFactory\WebServiceBundle\Entity\Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \TactFactory\WebServiceBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add results
     *
     * @param \TactFactory\WebServiceBundle\Entity\Result $results
     * @return MCQ
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
     *
     * @return string
     */
    public function __toString() {
    	return (string)$this->name;
    }
}
