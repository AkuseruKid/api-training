<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VillagerRepository")
 * @ApiResource(
 *     collectionOperations={"GET", "POST"},
 *     itemOperations={"GET"},
 *     normalizationContext={
 *          "groups"={"villagers_read"}
 *     },
 *     attributes={
 *          "pagination_enabled" = false
 *     }
 * )
 */
class Villager
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"villagers_read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"villagers_read"})
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"villagers_read"})
     */
    private $lastName;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"villagers_read"})
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"villagers_read"})
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
