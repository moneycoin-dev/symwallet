<?php

namespace Wallet\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;

/**
 * Client
 *
 * @ORM\Table("wallet_client")
 * @ORM\Entity
 * 
 * @ExclusionPolicy("all")
 */
class Client
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     * @Expose
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     * 
     * @Expose
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     * 
     * @Expose
     */
    private $lastName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetimetz")
     * 
     * @Expose
     */
    private $creationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="edit_date", type="datetimetz", nullable=true)
     * 
     * @Expose
     */
    private $editDate;

    /**
     * @ORM\OneToMany(targetEntity="Account", mappedBy="client")
     */
    private $accounts;

    /**
     * @ORM\OneToOne(targetEntity="Wallet\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->accounts = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set firstName
     *
     * @param string $firstName
     * @return Client
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
     * Set lastName
     *
     * @param string $lastName
     * @return Client
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Client
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime 
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set editDate
     *
     * @param \DateTime $editDate
     * @return Client
     */
    public function setEditDate($editDate)
    {
        $this->editDate = $editDate;

        return $this;
    }

    /**
     * Get editDate
     *
     * @return \DateTime 
     */
    public function getEditDate()
    {
        return $this->editDate;
    }

    /**
     * Add accounts
     *
     * @param \Wallet\DataBundle\Entity\Account $accounts
     * @return Client
     */
    public function addAccount(\Wallet\DataBundle\Entity\Account $accounts)
    {
        $this->accounts[] = $accounts;

        return $this;
    }

    /**
     * Remove accounts
     *
     * @param \Wallet\DataBundle\Entity\Account $accounts
     */
    public function removeAccount(\Wallet\DataBundle\Entity\Account $accounts)
    {
        $this->accounts->removeElement($accounts);
    }

    /**
     * Get accounts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * Set user
     *
     * @param \Wallet\UserBundle\Entity\User $user
     * @return Client
     */
    public function setUser(\Wallet\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Wallet\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

}
