<?php

namespace TactFactory\WebServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * Answer
 *
 * @ORM\Table(name="answer")
 * @ORM\Entity(repositoryClass="TactFactory\WebServiceBundle\Repository\AnswerRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ExclusionPolicy("All")
 */
class Answer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Expose
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ans", type="string", length=255, unique=true)
     * @Expose
     */
    private $ans;

     /**
     * @ORM\ManyToOne(targetEntity="TactFactory\WebServiceBundle\Entity\Question", inversedBy="answers")
     * @ORM\JoinColumn(nullable=false)
     * @Expose()
     */
    private $question;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_true", type="boolean")
     * @Expose
     */
    private $isTrue;

    /**
     * @var \DateTime
     *
     *@ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     *@var \DateTime
     *
     *@ORM\Column(name="updated_at", type="datetime")
     *@Expose()
     */
    private $updatedAt;


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
     * Set ans
     *
     * @param string $ans
     * @return Answer
     */
    public function setAns($ans)
    {
        $this->ans = $ans;

        return $this;
    }

    /**
     * Get ans
     *
     * @return string 
     */
    public function getAns()
    {
        return $this->ans;
    }

    /**
     * Set isTrue
     *
     * @param boolean $isTrue
     * @return Answer
     */
    public function setIsTrue($isTrue)
    {
        $this->isTrue = $isTrue;

        return $this;
    }

    /**
     * Get isTrue
     *
     * @return boolean 
     */
    public function getIsTrue()
    {
        return $this->isTrue;
    }

    /**
     * @ORM\PrePersist
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Answer
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
     * @ORM\PreUpdate
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Answer
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->$updatedAt = new \DateTime();

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
     * Set question
     *
     * @param \TactFactory\WebServiceBundle\Entity\Question $question
     * @return Answer
     */
    public function setQuestion(\TactFactory\WebServiceBundle\Entity\Question $question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \TactFactory\WebServiceBundle\Entity\Question 
     */
    public function getQuestion()
    {
        return $this->question;
    }
    
    /**
     * Return the value of ans when sonata call answer 
     * @return string
     */
    public function __toString() {
    	return (string)$this->ans;
    }
}
