<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 *  @ORM\Table(name="produit")
 */
class  Produit
{
    /** @ORM\id
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue 
     */
    private $ref;
    /** @ORM\Column(type="string") **/
    private $nom;
    /** 
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue 
     */
    private $qteStock;
    /**
     * Many produit have one user. This is the owning side.
     * @ORM\ManyToOne(targetEntity="User", inversedBy="id")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user_id ;

    public  function __construct()
    {

    }
    public function getUser_id()
    {
        return $this->user_id;
    }

    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
    }
    public function getRef()
    {
        return $this->ref;
    }

    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getQteStock()
    {
        return $this->qteStock;
    }
    public function setQteStock($qteStock)
    {
        $this->qteStock = $qteStock;
    }  
}
?>