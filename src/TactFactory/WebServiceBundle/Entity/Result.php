<?php

namespace TactFactory\WebServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Result
 *
 * @ORM\Table(name="result")
 * @ORM\Entity(repositoryClass="TactFactory\WebServiceBundle\Repository\ResultRepository")
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
}
