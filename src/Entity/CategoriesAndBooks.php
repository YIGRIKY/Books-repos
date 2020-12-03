<?php

namespace App\Entity;

use App\Repository\CategoriesAndBooksRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoriesAndBooksRepository::class)
 */
class CategoriesAndBooks
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categoryId;

    /**
     * @ORM\ManyToOne(targetEntity=Books::class, inversedBy="id")
     */
    private $bookId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryId(): ?Category
    {
        return $this->categoryId;
    }

    public function setCategoryId(?Category $categoryId): self
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    public function getBookId(): ?Books
    {
        return $this->bookId;
    }

    public function setBookId(?Books $bookId): self
    {
        $this->bookId = $bookId;

        return $this;
    }
}
