<?php

namespace FilmyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Film
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
     * @var string
     *
     * @ORM\Column(name="tytul", type="string", length=255)
     */
    private $tytul;

    /**
     * @var string
     *
     * @ORM\Column(name="opis", type="string", length=255)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="cena", type="string", length=255)
     */
    private $cena;

    /**
     * @ORM\ManyToMany(targetEntity="Ocena")
     * @ORM\JoinTable(name="filmy_oceny",
     *      joinColumns={@ORM\JoinColumn(name="film_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="ocena_id", referencedColumnName="id", unique=true)}
     *      )
     **/
    private $oceny;

    /**
     * @ORM\ManyToMany(targetEntity="Zamowienie")
     * @ORM\JoinTable(name="filmy_zamowienia",
     *      joinColumns={@ORM\JoinColumn(name="film_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="zamowienie_id", referencedColumnName="id", unique=true)}
     *      )
     **/
    private $zamowienia;

    public function __construct()
    {
        $this->oceny = new \Doctrine\Common\Collections\ArrayCollection();
        $this->zamowienia = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set tytul
     *
     * @param string $tytul
     * @return Film
     */
    public function setTytul($tytul)
    {
        $this->tytul = $tytul;

        return $this;
    }

    /**
     * Get tytul
     *
     * @return string 
     */
    public function getTytul()
    {
        return $this->tytul;
    }

 

    /**
     * Set opis
     *
     * @param string $opis
     * @return Film
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;

        return $this;
    }

    /**
     * Get opis
     *
     * @return string 
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Set cena
     *
     * @param string $cena
     * @return Film
     */
    public function setCena($cena)
    {
        $this->cena = $cena;

        return $this;
    }

    /**
     * Get cena
     *
     * @return string 
     */
    public function getCena()
    {
        return $this->cena;
    }

    /**
     * Add oceny
     *
     * @param \FilmyBundle\Entity\Ocena $oceny
     * @return Film
     */
    public function addOceny(\FilmyBundle\Entity\Ocena $oceny)
    {
        $this->oceny[] = $oceny;

        return $this;
    }

    /**
     * Remove oceny
     *
     * @param \FilmyBundle\Entity\Ocena $oceny
     */
    public function removeOceny(\FilmyBundle\Entity\Ocena $oceny)
    {
        $this->oceny->removeElement($oceny);
    }

    /**
     * Get oceny
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOceny()
    {
        return $this->oceny;
    }

    /**
     * Add zamowienia
     *
     * @param \FilmyBundle\Entity\Zamowienie $zamowienia
     * @return Film
     */
    public function addZamowienium(\FilmyBundle\Entity\Zamowienie $zamowienia)
    {
        $this->zamowienia[] = $zamowienia;

        return $this;
    }

    /**
     * Remove zamowienia
     *
     * @param \FilmyBundle\Entity\Zamowienie $zamowienia
     */
    public function removeZamowienium(\FilmyBundle\Entity\Zamowienie $zamowienia)
    {
        $this->zamowienia->removeElement($zamowienia);
    }

    /**
     * Get zamowienia
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getZamowienia()
    {
        return $this->zamowienia;
    }
}
