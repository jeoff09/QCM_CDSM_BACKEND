<?php

namespace TactFactory\WebServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table(name="team")
 * @ORM\Entity(repositoryClass="TactFactory\WebServiceBundle\Repository\TeamRepository")
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
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
    * @ORM\ManyToMany(targetEntity="TactFactory\WebServiceBundle\Entity\MCQ", cascade={"persist"})
    */
    private $mcqs;

    /**
    * @ORM\ManyToMany(targetEntity="TactFactory\WebServiceBundle\Entity\User", cascade={"persist"})
    */
    private $users;

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
     * Set name
     *
     * @param string $name
     * @return Team
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Team
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updateAt = $updatedAt;

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
     * @return Team
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
     * Add users
     *
     * @param \OC\PlatformBundle\Entity\User $users
     * @return Team
     */
    public function addUser(\TactFactory\WebServiceBundle\Entity\User $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \OC\PlatformBundle\Entity\User $users
     */
    public function removeUser(\TactFactory\WebServiceBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
