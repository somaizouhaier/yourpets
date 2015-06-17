<?php

namespace atn\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 * @ORM\Table(name="USER")
 * @ORM\Entity(repositoryClass="atn\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
     public function __construct()
    {
        parent::__construct();
        $this->animals = new ArrayCollection();
        $this->roles = array(static::ROLE_DEFAULT); // static::ROLE_DEFAULT = "ROLE_USER"
    }
      
   /**
    * 
    * @var integer
    * @ORM\Column(name="USER_ID", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    
    */
    
    protected $id;
    
    

   /**
    * 
    * @var string
    * @ORM\Column(name="USER_PHONE", type="string",length=30,nullable=true)
    * 
    */
    protected $phone;
    
   
    /**
    * 
    * @var string
    * @ORM\Column(name="USER_STATUS", type="string",length=30,nullable=true)
    * 
    */
    protected $status;
     /**
    * 
    * @var string
    * @ORM\Column(name="USER_FIRST_NAME", type="string",length=50,nullable=true)
    * 
    */
    protected $firstName;
     /**
    * 
    * @var string
    * @ORM\Column(name="USER_LAST_NAME", type="string",length=50,nullable=true)
    * 
    */
    protected $lastName;
     /**
    * 
    * @var string
    * @ORM\Column(name="USER_FACEBOOK_ID", type="string",length=100,nullable=true)
    * 
    */
    protected $facebookID;
     /**
    * 
    * @var string
    * @ORM\Column(name="USER_GOOGLE_ID", type="string",length=100,nullable=true)
    * 
    */
    protected $googleId;
     /**
    * 
    * @var string
    * @ORM\Column(name="USER_ADRESS", type="string",length=100,nullable=true)
    * 
    */
    protected $adress;
     /**
    * 
    * @var string
    * @ORM\Column(name="USER_COUTRY", type="string",length=50,nullable=true)
    * 
    */
    protected $country;
     /**
    * 
    * @var string
    * @ORM\Column(name="USER_COMPANY", type="string",length=30,nullable=true)
    * 
    */
    protected $company;
     /**
    * 
    * @var string
    * @ORM\Column(name="USER_CREATION_DATE", type="string",length=30,nullable=true)
    * 
    */
    protected $creationDate;
     /**
    * 
    * @var string
    * @ORM\Column(name="USER_UPDATING_DATE", type="string",length=30,nullable=true)
    * 
    */
    protected $updatingDate;
    
    /**
     * @ORM\OneToMany(targetEntity="atn\AnimalBundle\Entity\Animal", mappedBy="user")
     */
    protected $animals;
    
  
    
     /**
     * @return string
     */
    
    public function getId()
    {
        return $this->id;
        
    }
    /**
     * @return string
     */
    

    /**
     * Set phone
     *
     * @param string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return User
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return User
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
     * @return User
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
     * Set facebookID
     *
     * @param string $facebookID
     * @return User
     */
    public function setFacebookID($facebookID)
    {
        $this->facebookID = $facebookID;

        return $this;
    }

    /**
     * Get facebookID
     *
     * @return string 
     */
    public function getFacebookID()
    {
        return $this->facebookID;
    }

    /**
     * Set googleId
     *
     * @param string $googleId
     * @return User
     */
    public function setGoogleId($googleId)
    {
        $this->googleId = $googleId;

        return $this;
    }

    /**
     * Get googleId
     *
     * @return string 
     */
    public function getGoogleId()
    {
        return $this->googleId;
    }

    /**
     * Set adress
     *
     * @param string $adress
     * @return User
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string 
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set company
     *
     * @param string $company
     * @return User
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set creationDate
     *
     * @param string $creationDate
     * @return User
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return string 
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set updatingDate
     *
     * @param string $updatingDate
     * @return User
     */
    public function setUpdatingDate($updatingDate)
    {
        $this->updatingDate = $updatingDate;

        return $this;
    }

    /**
     * Get updatingDate
     *
     * @return string 
     */
    public function getUpdatingDate()
    {
        return $this->updatingDate;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set usernameCanonical
     *
     * @param string $usernameCanonical
     * @return User
     */
    public function setUsernameCanonical($usernameCanonical)
    {
        $this->usernameCanonical = $usernameCanonical;

        return $this;
    }

    /**
     * Get usernameCanonical
     *
     * @return string 
     */
    public function getUsernameCanonical()
    {
        return $this->usernameCanonical;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
        $this->username = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set emailCanonical
     *
     * @param string $emailCanonical
     * @return User
     */
    public function setEmailCanonical($emailCanonical)
    {
        $this->emailCanonical = $emailCanonical;
        $this->usernameCanonical = $emailCanonical;

        return $this;
    }

    /**
     * Get emailCanonical
     *
     * @return string 
     */
    public function getEmailCanonical()
    {
        return $this->emailCanonical;
    }

    /**
     * Add animals
     *
     * @param \atn\UserBundle\Entity\Animal $animals
     * @return User
     */
    public function addAnimal(\atn\AnimalBundle\Entity\Animal $animals)
    {
        $this->animals[] = $animals;

        return $this;
    }

    /**
     * Remove animals
     *
     * @param \atn\UserBundle\Entity\Animal $animals
     */
    public function removeAnimal(\atn\AnimalBundle\Entity\Animal $animals)
    {
        $this->animals->removeElement($animals);
    }

    /**
     * Get animals
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnimals()
    {
        return $this->animals;
    }

}
