<?php

namespace atn\AnimalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RaceAnimal
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="atn\AnimalBundle\Entity\RaceAnimalRepository")
 */
class RaceAnimal
{
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
    * @ORM\Column(name="labelle", type="string",nullable=true)
    * 
    */
    protected $labelle;
    
    /**
    * 
    * @var string
    * @ORM\Column(name="id_type", type="string",nullable=true)
    * 
    */
    protected $id_type;
    
    /**
    * 
    * @var string
    * @ORM\Column(name="image", type="string",nullable=true)
    * 
    */
    protected $image;
    
     /**
     * @ORM\OneToMany(targetEntity="Animal", mappedBy="race")
     */
    protected $animalTypes;
    
     /**
     * @ORM\OneToMany(targetEntity="Animal", mappedBy="type")
     */
    protected $animalRaces;
    


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
     * @return RaceAnimal
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
     * Set id_type
     *
     * @param string $idType
     * @return RaceAnimal
     */
    public function setIdType($idType)
    {
        $this->id_type = $idType;

        return $this;
    }

    /**
     * Get id_type
     *
     * @return string 
     */
    public function getIdType()
    {
        return $this->id_type;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return RaceAnimal
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->animalTypes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->animalRaces = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add animalTypes
     *
     * @param \atn\AnimalBundle\Entity\Animal $animalTypes
     * @return RaceAnimal
     */
    public function addAnimalType(\atn\AnimalBundle\Entity\Animal $animalTypes)
    {
        $this->animalTypes[] = $animalTypes;

        return $this;
    }

    /**
     * Remove animalTypes
     *
     * @param \atn\AnimalBundle\Entity\Animal $animalTypes
     */
    public function removeAnimalType(\atn\AnimalBundle\Entity\Animal $animalTypes)
    {
        $this->animalTypes->removeElement($animalTypes);
    }

    /**
     * Get animalTypes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnimalTypes()
    {
        return $this->animalTypes;
    }

    /**
     * Add animalRaces
     *
     * @param \atn\AnimalBundle\Entity\Animal $animalRaces
     * @return RaceAnimal
     */
    public function addAnimalRace(\atn\AnimalBundle\Entity\Animal $animalRaces)
    {
        $this->animalRaces[] = $animalRaces;

        return $this;
    }

    /**
     * Remove animalRaces
     *
     * @param \atn\AnimalBundle\Entity\Animal $animalRaces
     */
    public function removeAnimalRace(\atn\AnimalBundle\Entity\Animal $animalRaces)
    {
        $this->animalRaces->removeElement($animalRaces);
    }

    /**
     * Get animalRaces
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnimalRaces()
    {
        return $this->animalRaces;
    }
}
