<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IPv4CidrRange
 */
class IPv4CidrRange
{
    /**
     * IPv4 address in CIDR notation. Not nullable.
     */
    private ?string $cidrAddress;

    public function getCidrAddress(): ?string
    {
        return $this->cidrAddress;
    }

    public function setCidrAddress(?string $cidrAddress): self
    {
        $this->cidrAddress = $cidrAddress;
        return $this;
    }

}
