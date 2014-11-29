<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity
 * @ORM\Table(name="contact")
 */
 
class Contact {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
     
    protected $id;
    
     /**
     * @ORM\Column(type="string")
     */
    
    protected $nom;
    
     /**
     * @ORM\Column(type="string")
     */

    protected $prenom;
    
     /**
     * @ORM\Column(type="string")
     */

    protected $telephone;
     
     /**
     * @ORM\Column(type="string")
     */
    
    protected $email;
    
     /**
     * @ORM\Column(type="string")
     */
    
    protected $groupe;
    
     /**
     * @ORM\Column(type="string")
     */
    
    protected $idEnt; 
    
}