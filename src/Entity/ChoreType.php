<?php

namespace App\Entity;

use App\Repository\ChoreTypeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChoreTypeRepository::class)]
class ChoreType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $topic = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $project = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $level = null;

    #[ORM\Column(nullable: true)]
    private ?bool $hadHelp = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $helpDescription = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getTopic(): ?string
    {
        return $this->topic;
    }

    public function setTopic(?string $topic): static
    {
        $this->topic = $topic;

        return $this;
    }

    public function getProject(): ?string
    {
        return $this->project;
    }

    public function setProject(?string $project): static
    {
        $this->project = $project;

        return $this;
    }

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(?string $level): static
    {
        $this->level = $level;

        return $this;
    }

    public function isHadHelp(): ?bool
    {
        return $this->hadHelp;
    }

    public function setHadHelp(?bool $hadHelp): static
    {
        $this->hadHelp = $hadHelp;

        return $this;
    }

    public function getHelpDescription(): ?string
    {
        return $this->helpDescription;
    }

    public function setHelpDescription(?string $helpDescription): static
    {
        $this->helpDescription = $helpDescription;

        return $this;
    }
}
