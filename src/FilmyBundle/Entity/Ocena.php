<?php

namespace FilmyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ocena
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Ocena
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
     * @var integer
     *
     * @ORM\Column(name="ocena", type="integer")
     */
    private $ocena;

    /**
     * @var string
     *
     * @ORM\Column(name="komentarz", type="text")
     */
    private $komentarz;


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
     * Set ocena
     *
     * @param integer $ocena
     * @return Ocena
     */
    public function setOcena($ocena)
    {
        $this->ocena = $ocena;

        return $this;
    }

    /**
     * Get ocena
     *
     * @return integer 
     */
    public function getOcena()
    {
        return $this->ocena;
    }

    /**
     * Set komentarz
     *
     * @param string $komentarz
     * @return Ocena
     */
    public function setKomentarz($komentarz)
    {
        $this->komentarz = $komentarz;

        return $this;
    }

    /**
     * Get komentarz
     *
     * @return string 
     */
    public function getKomentarz()
    {
        return $this->komentarz;
    }
}
