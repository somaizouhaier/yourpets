<?php

namespace atn\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="atn\MediaBundle\Entity\CommentaireRepository")
 */
class Commentaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="COMMENTAIRE_ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * 
     * @var string
     * @ORM\Column(name="labelle", type="string")
     * 
     */
    protected $labelle;
   
    /**
     * @ORM\ManyToOne(targetEntity="atn\AnimalBundle\Entity\Animal", inversedBy="commentaires", cascade={"persist"})
     * @ORM\JoinColumn(name="animal_id", referencedColumnName="ANIMAL_ID")
     */
    protected $animal;

    /**
     * @ORM\ManyToOne(targetEntity="atn\MediaBundle\Entity\Media", inversedBy="commentaires", cascade={"persist"})
     * @ORM\JoinColumn( referencedColumnName="id")
     */
    protected $media;
    
   
    
    /**
     * 
     * @var datetime
     * @ORM\Column(name="DATE_CREATE", type="datetime",length=30)
     * 
     */
    protected $dateCreate;


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
     * Set labelle
     *
     * @param string $labelle
     * @return Commentaire
     */
    public function setLabelle($labelle)
    {
        $this->labelle = $labelle;

        return $this;
    }

    /**
     * Get labelle
     *
     * @return string 
     */
    public function getLabelle()
    {
        return $this->labelle;
    }

    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     * @return Commentaire
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    /**
     * Get dateCreate
     *
     * @return \DateTime 
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

   
    /**
     * @ORM\PrePersist
     */
    public function CreateDate() {
        $this->setDateCreate(new \Datetime());
    }


    /**
     * Set animal
     *
     * @param \atn\AnimalBundle\Entity\Animal $animal
     * @return Commentaire
     */
    public function setAnimal(\atn\AnimalBundle\Entity\Animal $animal = null)
    {
        $this->animal = $animal;

        return $this;
    }

    /**
     * Get animal
     *
     * @return \atn\AnimalBundle\Entity\Animal 
     */
    public function getAnimal()
    {
        return $this->animal;
    }

    /**
     * Set media
     *
     * @param \atn\MediaBundle\Entity\Media $media
     * @return Commentaire
     */
    public function setMedia(\atn\MediaBundle\Entity\Media $media = null)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return \atn\MediaBundle\Entity\Media 
     */
    public function getMedia()
    {
        return $this->media;
    }
}
