<?php

namespace Creativolab\App\Models\Skill;

class Category
{
    private int $id;
    private string $category;
    private int $user;

    /**
     * @param int $id
     * @param string $category
     * @param int $user
     */
    public function __construct(int $id, string $category, int $user)
    {
        $this->id = $id;
        $this->category = $category;
        $this->user = $user;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    /**
     * @return int
     */
    public function getUser(): int
    {
        return $this->user;
    }

    /**
     * @param int $user
     */
    public function setUser(int $user): void
    {
        $this->user = $user;
    }

}