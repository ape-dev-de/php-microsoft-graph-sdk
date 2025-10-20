<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisionChannelEmailResult
 */
class ProvisionChannelEmailResult
{
    /**
     * Represents the provisioned email address.
     */
    private ?string $email;

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

}
