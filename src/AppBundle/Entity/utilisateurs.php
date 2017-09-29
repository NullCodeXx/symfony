<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * utilisateurs
 *
 * @ORM\Table(name="entityutilisateurs")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Entity\utilisateursRepository")
 */
class utilisateurs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=30, nullable=true, unique=true)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30, nullable=true, unique=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=true, unique=true)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="experience", type="string", length=512, nullable=true, unique=true)
     */
    private $experience;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudoWeb", type="string", length=30, nullable=true, unique=true)
     */
    private $pseudoWeb;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return utilisateurs
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return utilisateurs
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return utilisateurs
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set experience
     *
     * @param string $experience
     *
     * @return utilisateurs
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return string
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set pseudoWeb
     *
     * @param string $pseudoWeb
     *
     * @return utilisateurs
     */
    public function setPseudoWeb($pseudoWeb)
    {
        $this->pseudoWeb = $pseudoWeb;

        return $this;
    }

    /**
     * Get pseudoWeb
     *
     * @return string
     */
    public function getPseudoWeb()
    {
        return $this->pseudoWeb;
    }
}

