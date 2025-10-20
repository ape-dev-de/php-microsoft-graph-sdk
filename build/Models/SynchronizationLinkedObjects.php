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
     */
    private ?string $owners;

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

    public function getOwners(): ?string
    {
        return $this->owners;
    }

    public function setOwners(?string $owners): self
    {
        $this->owners = $owners;
        return $this;
    }

}
