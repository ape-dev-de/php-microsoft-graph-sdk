<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisionedIdentity
 */
class ProvisionedIdentity
{
    /**
     * Details of the identity.
     */
    private ?string $details;

    /**
     * Type of identity that has been provisioned, such as ''user'' or ''group''. Supports $filter (eq, contains).
     */
    private ?string $identityType;

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(?string $details): self
    {
        $this->details = $details;
        return $this;
    }

    public function getIdentityType(): ?string
    {
        return $this->identityType;
    }

    public function setIdentityType(?string $identityType): self
    {
        $this->identityType = $identityType;
        return $this;
    }

}
