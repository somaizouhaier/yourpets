<?php

namespace atn\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Media
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="atn\MediaBundle\Entity\MediaRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Media {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * 
     * @var string
     * @ORM\Column(name="href", type="string",nullable=true)
     * 
     */
    protected $href;

    /**
     * 
     * @var string
     * @ORM\Column(name="alt", type="string",nullable=true)
     * 
     */
    protected $alt;

    /**
     * 
     * @var string
     * @ORM\Column(name="type",columnDefinition="enum('image', 'video')", type="string")
     * 
     */
    protected $type;

    /**
     * 
     * @var string
     * @ORM\Column(name="description",type="string",nullable=true)
     * 
     */
    protected $description;
    
    /**
     * @ORM\ManyToOne(targetEntity="atn\AnimalBundle\Entity\Animal", inversedBy="medias", cascade={"remove"})
     * @ORM\JoinColumn(name="animal_id", referencedColumnName="ANIMAL_ID")
     */
    protected $animal;
    
    /**
     * @ORM\OneToMany(targetEntity="atn\MediaBundle\Entity\Commentaire", mappedBy="media")
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
     * @Assert\File(maxSize="6000000")
     */
    public $file;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set href
     *
     * @param string $href
     * @return Media
     */
    public function setHref($href) {
        $this->href = $href;

        return $this;
    }

    /**
     * Get href
     *
     * @return string 
     */
    public function getHref() {
        return $this->href;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return Media
     */
    public function setAlt($alt) {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt() {
        return $this->alt;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Media
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set animal
     *
     * @param \atn\AnimalBundle\Entity\Animal $animal
     * @return Media
     */
    public function setAnimal(\atn\AnimalBundle\Entity\Animal $animal = null) {
        $this->animal = $animal;

        return $this;
    }

    /**
     * Get animal
     *
     * @return \atn\AnimalBundle\Entity\Animal 
     */
    public function getAnimal() {
        return $this->animal;
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
     * Constructor
     */
    public function __construct()
    {
        $this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Add commentaires
     *
     * @param \atn\MediaBundle\Entity\Commentaire $commentaires
     * @return Media
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
     * Set description
     *
     * @param string $description
     * @return Media
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
