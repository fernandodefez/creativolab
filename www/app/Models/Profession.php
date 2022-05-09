<?php

namespace Creativolab\App\Models;

class Profession {

    private int $id;
    private string $profession;
    private string $template;

    /**
     * @param int $id
     * @param string $profession
     * @param string $template
     */
    public function __construct(int $id = 0, string $profession = "", string $template = "")
    {
        $this->id = $id;
        $this->profession = $profession;
        $this->template = $template;
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

    /**
     * @return string
     */
    public function getTemplate(): string
    {
        return $this->template;
    }

    /**
     * @param string $template
     */
    public function setTemplate(string $template): void
    {
        $this->template = $template;
    }
}