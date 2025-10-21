<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationLinkedObjects
 */
class SynchronizationLinkedObjects
{
    /**
     */
    private ?string $manager;

    /**
     * All group members that you would like to provision.
     */
    private array $members = [];

    /**
     * @var string[]
     */
    private array $owners = [];


    public function getManager(): ?string
    {
        return $this->manager;
    }

    public function setManager(?string $manager): self
    {
        $this->manager = $manager;
        return $this;
    }

    public function getMembers(): array
    {
        return $this->members;
    }

    public function setMembers(array $members): self
    {
        $this->members = $members;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getOwners(): array
    {
        return $this->owners;
    }

    /**
     * @param string[] $owners
     */
    public function setOwners(array $owners): self
    {
        $this->owners = $owners;
        return $this;
    }

}
