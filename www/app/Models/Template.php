<?php

namespace Creativolab\App\Models;

class Template {

    private int $id;
    private string $template;
    private Profession $profession;

    /**
     * @param int $id
     * @param string $template
     * @param Profession $profession
     */
    public function __construct(int $id, string $template, Profession $profession)
    {
        $this->id = $id;
        $this->template = $template;
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

    /**
     * @return Profession
     */
    public function getProfession(): Profession
    {
        return $this->profession;
    }

    /**
     * @param Profession $profession
     */
    public function setProfession(Profession $profession): void
    {
        $this->profession = $profession;
    }
}
