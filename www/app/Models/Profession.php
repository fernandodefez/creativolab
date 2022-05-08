<?php

namespace Creativolab\App\Models;

class Profession {

    private int $id;
    private string $profession;

    /**
     * @param int $id
     * @param string $profession
     */
    public function __construct(int $id, string $profession)
    {
        $this->id = $id;
        $this->profession = $profession;
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
    public function getProfession(): string
    {
        return $this->profession;
    }

    /**
     * @param string $profession
     */
    public function setProfession(string $profession): void
    {
        $this->profession = $profession;
    }
}