<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity
 * @ORM\Table(name="entreprise")
 */
 
class Entreprise {
 
    protected $id;
    
    
    protected $nom;
    
    
    protected $prenom;
    
    
    protected $name;
    
    
    protected $createdAt; 
    
}