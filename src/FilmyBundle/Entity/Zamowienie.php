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
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     **/
    private $user;
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        $this->czas = new \DateTime();
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

    /**
     * Set user
     *
     * @param \FilmyBundle\Entity\User $user
     * @return Zamowienie
     */
    public function setUser(\FilmyBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \FilmyBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
    public function __toString()
    {
        return '';
    }
}
