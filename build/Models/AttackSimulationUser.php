<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttackSimulationUser
 */
class AttackSimulationUser
{
    /**
     * Display name of the user.
     */
    private ?string $displayName;

    /**
     * Email address of the user.
     */
    private ?string $email;

    /**
     * This is the id property value of the user resource that represents the user in the Microsoft Entra tenant.
     */
    private ?string $userId;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

}
