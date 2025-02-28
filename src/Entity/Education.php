<?php

namespace App\Entity;

use App\Repository\EducationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=EducationRepository::class)
 */
#[ORM\Entity(repositoryClass: EducationRepository::class)]
class Education
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 2, max: 255)]
    private ?string $school = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 2, max: 255)]
    private ?string $degree = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank]
    #[Assert\Type("\DateTimeInterface")]
    private ?\DateTimeInterface $startDate = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?bool $isCurrentlyEnroled = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    #[Assert\Type("\DateTimeInterface")]

    private ?\DateTimeInterface $endDate = null;

    #[ORM\ManyToOne(inversedBy: 'education')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getSchool(): ?string
    {
        return $this->school;
    }

    /**
     * @param string $school
     *
     * @return $this
     */
    public function setSchool(string $school): static
    {
        $this->school = $school;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDegree(): ?string
    {
        return $this->degree;
    }

    /**
     * @param string $degree
     *
     * @return $this
     */
    public function setDegree(string $degree): static
    {
        $this->degree = $degree;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeInterface $startDate
     *
     * @return $this
     */
    public function setStartDate(\DateTimeInterface $startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function isCurrentlyEnroled(): ?bool
    {
        return $this->isCurrentlyEnroled;
    }

    /**
     * @param bool      $isCurrentlyEnroled
     *
     * @return $this
     */
    public function setIsCurrentlyEnroled(bool $isCurrentlyEnroled): static
    {
        $this->isCurrentlyEnroled = $isCurrentlyEnroled;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    /**
     * @param \DateTimeInterface|null $endDate
     *
     * @return $this
     */
    public function setEndDate(?\DateTimeInterface $endDate): static
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param User|null $user
     *
     * @return $this
     */
    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
}
