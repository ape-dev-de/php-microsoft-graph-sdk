<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SingleUser
 */
class SingleUser
{
    /**
     * The name of the user in Microsoft Entra ID. Read-only.
     */
    private ?string $description;

    /**
     * The ID of the user in Microsoft Entra ID.
     */
    private ?string $userId;


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
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
