<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationRoot
 */
class EducationRoot
{
    /**
     */
    private array $classes = [];

    /**
     */
    private ?string $me;

    /**
     */
    private ?string $reports;

    /**
     */
    private array $schools = [];

    /**
     */
    private ?string $users;

    public function getClasses(): array
    {
        return $this->classes;
    }

    public function setClasses(array $classes): self
    {
        $this->classes = $classes;
        return $this;
    }

    public function getMe(): ?string
    {
        return $this->me;
    }

    public function setMe(?string $me): self
    {
        $this->me = $me;
        return $this;
    }

    public function getReports(): ?string
    {
        return $this->reports;
    }

    public function setReports(?string $reports): self
    {
        $this->reports = $reports;
        return $this;
    }

    public function getSchools(): array
    {
        return $this->schools;
    }

    public function setSchools(array $schools): self
    {
        $this->schools = $schools;
        return $this;
    }

    public function getUsers(): ?string
    {
        return $this->users;
    }

    public function setUsers(?string $users): self
    {
        $this->users = $users;
        return $this;
    }

}
