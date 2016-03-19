<?php

namespace TactFactory\WebServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity(repositoryClass="TactFactory\WebServiceBundle\Repository\QuestionRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ExclusionPolicy("All")
 */
class Question
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
     * @ORM\Column(name="que", type="string", length=255)
     * @Expose()
     */
    private $que;

	/**
    * @ORM\OneToOne(targetEntity="TactFactory\WebServiceBundle\Entity\Media" ,cascade={"remove"})
    * @Expose()
    */
    private $media;
	
     /**
    * @ORM\OneToMany(targetEntity="TactFactory\WebServiceBundle\Entity\Answer", mappedBy="question",cascade={"remove"})
    * @Expose()
    */
    private $answers;

     /**
     * @ORM\ManyToOne(targetEntity="TactFactory\WebServiceBundle\Entity\MCQ", inversedBy="questions")
     * @ORM\JoinColumn(nullable=false)
     * 
     */
    private $mcq;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     * @Expose()
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
     * Set que
     *
     * @param string $que
     * @return Question
     */
    public function setQue($que)
    {
        $this->que = $que;

        return $this;
    }

    /**
     * Get que
     *
     * @return string 
     */
    public function getQue()
    {
        return $this->que;
    }

    /**
     * @ORM\PreUpdate
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Question
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
     * @return Question
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
     * Set media
     *
     * @param \TactFactory\WebServiceBundle\Entity\Media $media
     * @return Question
     */
    public function setMedia(\TactFactory\WebServiceBundle\Entity\Media $media = null)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return \TactFactory\WebServiceBundle\Entity\Media 
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set mcq
     *
     * @param \TactFactory\WebServiceBundle\Entity\MSQ $mcq
     * @return Question
     */
    public function setMcq(\TactFactory\WebServiceBundle\Entity\MCQ $mcq)
    {
        $this->mcq = $mcq;

        return $this;
    }

    /**
     * Get mcq
     *
     * @return \TactFactory\WebServiceBundle\Entity\MSQ 
     */
    public function getMcq()
    {
        return $this->mcq;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->answers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add answers
     *
     * @param \TactFactory\WebServiceBundle\Entity\Answer $answers
     * @return Question
     */
    public function addAnswer(\TactFactory\WebServiceBundle\Entity\Answer $answers)
    {
        $this->answers[] = $answers;

        return $this;
    }

    /**
     * Remove answers
     *
     * @param \TactFactory\WebServiceBundle\Entity\Answer $answers
     */
    public function removeAnswer(\TactFactory\WebServiceBundle\Entity\Answer $answers)
    {
        $this->answers->removeElement($answers);
    }

    /**
     * Get answers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnswers()
    {
        return $this->answers;
    }
}
