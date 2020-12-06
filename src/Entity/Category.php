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
     * @ORM\OneToMany(targetEntity=CategoriesAndBooks::class, mappedBy="categoryId")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $category_name;



    public function __construct()
    {
        $this->category = new ArrayCollection();
        $this->categoriesAndBooks = new ArrayCollection();
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
    public function getCategoriesAndBooks(): Collection
    {
        return $this->categoriesAndBooks;
    }

    public function addCategoriesAndBook(CategoriesAndBooks $categoriesAndBook): self
    {
        if (!$this->categoriesAndBooks->contains($categoriesAndBook)) {
            $this->categoriesAndBooks[] = $categoriesAndBook;
            $categoriesAndBook->setCategoryid($this);
        }

        return $this;
    }

    public function removeCategoriesAndBook(CategoriesAndBooks $categoriesAndBook): self
    {
        if ($this->categoriesAndBooks->removeElement($categoriesAndBook)) {
            // set the owning side to null (unless already changed)
            if ($categoriesAndBook->getCategoryid() === $this) {
                $categoriesAndBook->setCategoryid(null);
            }
        }

        return $this;
    }


}
