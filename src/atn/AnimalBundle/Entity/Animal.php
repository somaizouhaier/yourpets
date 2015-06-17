<?php

namespace atn\AnimalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Animal
 *
 * @ORM\Table(name="ANIMAL")
 * @ORM\Entity(repositoryClass="atn\AnimalBundle\Entity\AnimalRepository")
 */
class Animal {

    public function __construct() {
        $this->medias = new ArrayCollection();
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="ANIMAL_ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * 
     * @var string
     * @ORM\Column(name="ANIMAL_PSEUDO", type="string",length=30,nullable=true)
     * 
     */
    protected $pseudo;

    /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;

    /**
     * 
     * @var string
     * @ORM\Column(name="ANIMAL_DESCRIPTION", type="string",length=30,nullable=true)
     * 
     */
    protected $description;

    /**
     * 
     * @var datetime
     * @ORM\Column(name="ANIMAL_BIRTHDAY", type="datetime",length=30,nullable=true)
     * 
     */
    protected $dateNaissance;

    /**
     * @ORM\ManyToOne(targetEntity="atn\UserBundle\Entity\User", inversedBy="products")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="USER_ID")
     */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="RaceAnimal", inversedBy="animalTypes")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $type;
/**
     * @ORM\ManyToOne(targetEntity="RaceAnimal", inversedBy="animalRaces")
     * @ORM\JoinColumn(name="race_id", referencedColumnName="id")
     */
    private $race;

    /**
     * @ORM\OneToOne(targetEntity="atn\MediaBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $imageProfile;

    /**
     * @ORM\OneToMany(targetEntity="atn\MediaBundle\Entity\Media", mappedBy="animal")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $medias;
    
    /**
     * @ORM\OneToMany(targetEntity="atn\MediaBundle\Entity\Commentaire", mappedBy="animal")
     */
    protected $commentaires;

    /**
     * 
     * @var datetime
     * @ORM\Column(name="DATE_CREATE", type="datetime",length=30,nullable=true)
     * 
     */
    protected $dateCreate;
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     * @return Animal
     */
    public function setPseudo($pseudo) {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string 
     */
    public function getPseudo() {
        return $this->pseudo;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Animal
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set dateNaissance
     *
     * @param string $dateNaissance
     * @return Animal
     */
    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return string 
     */
    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    /**
     * Set user
     *
     * @param \atn\UserBundle\Entity\User $user
     * @return Animal
     */
    public function setUser(\atn\UserBundle\Entity\User $user = null) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \atn\UserBundle\Entity\User 
     */
    public function getUser() {
        return $this->user;
    }


    /**
     * Set imageProfile
     *
     * @param \atn\MediaBundle\Entity\Media $imageProfile
     * @return Animal
     */
    public function setImageProfile(\atn\MediaBundle\Entity\Media $imageProfile = null) {
        $this->imageProfile = $imageProfile;

        return $this;
    }

    /**
     * Get imageProfile
     *
     * @return \atn\MediaBundle\Entity\Media 
     */
    public function getImageProfile() {
        return $this->imageProfile;
    }

    /**
     * Add medias
     *
     * @param \atn\MediaBundle\Entity\Media $medias
     * @return Animal
     */
    public function addMedia(\atn\MediaBundle\Entity\Media $medias) {
        $this->medias[] = $medias;

        return $this;
    }

    /**
     * Remove medias
     *
     * @param \atn\MediaBundle\Entity\Media $medias
     */
    public function removeMedia(\atn\MediaBundle\Entity\Media $medias) {
        $this->medias->removeElement($medias);
    }

    /**
     * Get medias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMedias() {
        return $this->medias;
    }

    public function getAbsolutePath() {
        return null === $this->path ? null : $this->getUploadRootDir() . '/' . $this->path;
    }

    public function getWebPath() {
        return null === $this->path ? null : $this->getUploadDir() . '/' . $this->path;
    }

    public function getUploadRootDir() {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    public function getUploadDir() {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'uploads/documents';
    }



    /**
     * Set type
     *
     * @param \atn\AnimalBundle\Entity\RaceAnimal $type
     * @return Animal
     */
    public function setType(\atn\AnimalBundle\Entity\RaceAnimal $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \atn\AnimalBundle\Entity\RaceAnimal 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set race
     *
     * @param \atn\AnimalBundle\Entity\RaceAnimal $race
     * @return Animal
     */
    public function setRace(\atn\AnimalBundle\Entity\RaceAnimal $race = null)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return \atn\AnimalBundle\Entity\RaceAnimal 
     */
    public function getRace()
    {
        return $this->race;
    }
    
    /**
     * @ORM\PrePersist
     */
    public function CreateDate() {
        $this->setDateCreate(new \Datetime());
    }

    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     * @return Media
     */
    public function setDateCreate($dateCreate) {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    /**
     * Get dateCreate
     *
     * @return \DateTime 
     */
    public function getDateCreate() {
        return $this->dateCreate;
    }

    /**
     * Add commentaires
     *
     * @param \atn\MediaBundle\Entity\Commentaire $commentaires
     * @return Animal
     */
    public function addCommentaire(\atn\MediaBundle\Entity\Commentaire $commentaires)
    {
        $this->commentaires[] = $commentaires;

        return $this;
    }

    /**
     * Remove commentaires
     *
     * @param \atn\MediaBundle\Entity\Commentaire $commentaires
     */
    public function removeCommentaire(\atn\MediaBundle\Entity\Commentaire $commentaires)
    {
        $this->commentaires->removeElement($commentaires);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }
}
