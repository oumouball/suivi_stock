<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity @ORM\Table(name="user")
 */
class User
{
     /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private $id;
   /** @ORM\Column(type="string") **/
    private $nom;
    /** @ORM\Column(type="string") **/
    private $prenom;
    /** @ORM\Column(type="string") **/
    private $email;
    /** @ORM\Column(type="string") **/
    private $password;
    /** @ORM\Column(type="integer") **/
       private $etat;
    /**
        * @ORM\OneToMany(targetEntity="Produit", mappedBy="id_user")
    */
    public  function __construct()
    {
       
    }
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email= $email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password= $password;
    }
    public function getEtat()
    {
        return $this->etat;
    }
    public function setEtat($etat)
    {
        $this->etat= $etat;
    }
}

?>