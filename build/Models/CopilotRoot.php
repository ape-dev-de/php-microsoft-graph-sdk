<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CopilotRoot
 */
class CopilotRoot
{
    /**
     */
    private ?string $admin;

    /**
     */
    private ?string $interactionHistory;

    /**
     * @var string[]
     */
    private array $users = [];


    public function getAdmin(): ?string
    {
        return $this->admin;
    }

    public function setAdmin(?string $admin): self
    {
        $this->admin = $admin;
        return $this;
    }

    public function getInteractionHistory(): ?string
    {
        return $this->interactionHistory;
    }

    public function setInteractionHistory(?string $interactionHistory): self
    {
        $this->interactionHistory = $interactionHistory;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    /**
     * @param string[] $users
     */
    public function setUsers(array $users): self
    {
        $this->users = $users;
        return $this;
    }

}
