<?php

namespace App\Entity;
use App\Repository\RapportRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\MaxDepth;
use Symfony\Component\Serializer\Annotation\Ignore;

#[ORM\Entity(repositoryClass: RapportRepository::class)]
class Rapport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['show_rapport', 'show_rapport'])]
    private ?int $id = null;

    #[Groups(['show_product', 'show_post'])]
    #[ORM\ManyToOne(inversedBy: 'rapports')]
    private ?Utilisateur $utilisateur = null;

    #[ORM\Column(length: 255)]
    #[Groups(['show_product', 'show_post'])]
    private ?string $titre_rapport = null;

    #[ORM\Column(length: 255)]
    #[Groups(['show_product', 'show_post'])]
    private ?string $texte_rapport = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $rapport_date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }
    
    public function getTitreRapport(): ?string
    {
        return $this->titre_rapport;
    }

    public function setTitreRapport(string $titre_rapport): self
    {
        $this->titre_rapport = $titre_rapport;

        return $this;
    }

    public function getTexteRapport(): ?string
    {
        return $this->texte_rapport;
    }

    public function setTexteRapport(string $texte_rapport): self
    {
        $this->texte_rapport = $texte_rapport;

        return $this;
    }

    public function getRapportDate(): ?\DateTimeInterface
    {
        return $this->rapport_date;
    }

    public function setRapportDate(\DateTimeInterface $rapport_date): self
    {
        $this->rapport_date = $rapport_date;

        return $this;
    }
}
