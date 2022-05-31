<?php

namespace Creativolab\App\Models\Skill;

class Skill
{
    private int $id;
    private string $skill;
    private int $progression;
    private int $category;

    /**
     * @param int $id
     * @param string $skill
     * @param int $progression
     * @param int $category
     */
    public function __construct(int $id, string $skill, int $progression, int $category)
    {
        $this->id = $id;
        $this->skill = $skill;
        $this->progression = $progression;
        $this->category = $category;
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
    public function getSkill(): string
    {
        return $this->skill;
    }

    /**
     * @param string $skill
     */
    public function setSkill(string $skill): void
    {
        $this->skill = $skill;
    }

    /**
     * @return int
     */
    public function getProgression(): int
    {
        return $this->progression;
    }

    /**
     * @param int $progression
     */
    public function setProgression(int $progression): void
    {
        $this->progression = $progression;
    }

    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->category;
    }

    /**
     * @param int $category
     */
    public function setCategory(int $category): void
    {
        $this->category = $category;
    }
}
