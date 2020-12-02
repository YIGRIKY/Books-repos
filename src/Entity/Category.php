<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $category_name;

    /**
     * @ORM\OneToMany(targetEntity=CategoriesAndBooks::class, mappedBy="categoryId")
     */
    private $category;

    public function __construct()
    {
        $this->category = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryName(): ?string
    {
        return $this->category_name;
    }

    public function setCategoryName(string $category_name): self
    {
        $this->category_name = $category_name;

        return $this;
    }

    /**
     * @return Collection|CategoriesAndBooks[]
     */
    public function getCategory(): Collection
    {
        return $this->category;
    }

    public function addCategory(CategoriesAndBooks $category): self
    {
        if (!$this->category->contains($category)) {
            $this->category[] = $category;
            $category->setCategoryId($this);
        }

        return $this;
    }

    public function removeCategory(CategoriesAndBooks $category): self
    {
        if ($this->category->removeElement($category)) {
            // set the owning side to null (unless already changed)
            if ($category->getCategoryId() === $this) {
                $category->setCategoryId(null);
            }
        }

        return $this;
    }
}
