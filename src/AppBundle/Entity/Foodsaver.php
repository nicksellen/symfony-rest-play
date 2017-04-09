<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Security\Core\User\UserInterface;

use JMS\Serializer\Annotation\Exclude;

/**
 * Foodsaver
 *
 * @ORM\Table(name="fs_foodsaver")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FoodsaverRepository")
 */
class Foodsaver implements UserInterface
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
     * @ORM\Column(name="email", type="string", length=120)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=120)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="nachname", type="string", length=120)
     */
    private $nachname;

    /**
     * @var string
     *
     * @ORM\Column(name="passwd", type="string", length=32)
     * @Exclude
     */
    private $passwd;

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
     * Set email
     *
     * @param string $email
     *
     * @return Foodsaver
     */
    public function setEmail($email)
    {
        $this->email = $email;

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
     * Set name
     *
     * @param string $name
     *
     * @return Foodsaver
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
     * Set nachname
     *
     * @param string $nachname
     *
     * @return Foodsaver
     */
    public function setNachname($nachname)
    {
        $this->nachname = $nachname;

        return $this;
    }

    /**
     * Get nachname
     *
     * @return string
     */
    public function getNachname()
    {
        return $this->nachname;
    }

    /**
     * Set passwd
     *
     * @param string $passwd
     *
     * @return Foodsaver
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;

        return $this;
    }

    /**
     * Get passwd
     *
     * @return string
     */
    public function getPasswd()
    {
        return $this->passwd;
    }


    // UserInterface implementation

    public function getUsername()
    {
        return $this->email;
    }

    public function getRoles()
    {
        return array('ROLE_FOODSAVER');
    }

    public function getPassword()
    {
      return $this->passwd;
    }

    public function getSalt()
    {
      return null;
    }

    public function eraseCredentials()
    {
      // TODO...
    }

}

