<?php

namespace App\Entity;

use App\Repository\PersoneRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersoneRepository::class)]
class Persone
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column]
    private ?float $age = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAge(): ?float
    {
        return $this->age;
    }

    public function setAge(float $age): static
    {
        $this->age = $age;

        return $this;
    }
    public function __construct($nom ,$prenom,$age){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
      }
    public function categorie():string{
        if($this->age<0){
            throw new \Exception("invalid age");
        }
        if($this-> age >18)
        return "majeur";
        else 
        return"mineur";

        

    }
}

