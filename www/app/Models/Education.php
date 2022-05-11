<?php


namespace Creativolab\App\Models;

class Education
{

    private int $id;
    private string $level;
    private string $degree;
    private string $institute;
    private string $startedAt;
    private string $endedAt;
    private string $details;

    // Foreign Key
    private int $user;

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
    public function getLevel(): string
    {
        return $this->level;
    }

    /**
     * @param string $level
     */
    public function setLevel(string $level): void
    {
        $this->level = $level;
    }

    /**
     * @return string
     */
    public function getDegree(): string
    {
        return $this->degree;
    }

    /**
     * @param string $degree
     */
    public function setDegree(string $degree): void
    {
        $this->degree = $degree;
    }

    /**
     * @return string
     */
    public function getInstitute(): string
    {
        return $this->institute;
    }

    /**
     * @param string $institute
     */
    public function setInstitute(string $institute): void
    {
        $this->institute = $institute;
    }

    /**
     * @return string
     */
    public function getStartedAt(): string
    {
        return $this->startedAt;
    }

    /**
     * @param string $startedAt
     */
    public function setStartedAt(string $startedAt): void
    {
        $this->startedAt = $startedAt;
    }

    /**
     * @return string
     */
    public function getEndedAt(): string
    {
        return $this->endedAt;
    }

    /**
     * @param string $endedAt
     */
    public function setEndedAt(string $endedAt): void
    {
        $this->endedAt = $endedAt;
    }

    /**
     * @return string
     */
    public function getDetails(): string
    {
        return $this->details;
    }

    /**
     * @param string $details
     */
    public function setDetails(string $details): void
    {
        $this->details = $details;
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