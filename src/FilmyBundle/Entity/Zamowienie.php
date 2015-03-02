<?php

namespace FilmyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zamowienie
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Zamowienie
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
     * @var \DateTime
     *
     * @ORM\Column(name="czas", type="datetime")
     */
    private $czas;


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
     * Set czas
     *
     * @param \DateTime $czas
     * @return Zamowienie
     */
    public function setCzas($czas)
    {
        $this->czas = $czas;

        return $this;
    }

    /**
     * Get czas
     *
     * @return \DateTime 
     */
    public function getCzas()
    {
        return $this->czas;
    }
}
