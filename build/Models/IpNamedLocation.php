<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IpNamedLocation
 */
class IpNamedLocation
{
    /**
     * List of IP address ranges in IPv4 CIDR format (for example, 1.2.3.4/32) or any allowable IPv6 format from IETF RFC5969. Required.
     */
    private array $ipRanges = [];

    /**
     * true if this location is explicitly trusted. Optional. Default value is false.
     */
    private ?string $isTrusted;

    public function getIpRanges(): array
    {
        return $this->ipRanges;
    }

    public function setIpRanges(array $ipRanges): self
    {
        $this->ipRanges = $ipRanges;
        return $this;
    }

    public function getIsTrusted(): ?string
    {
        return $this->isTrusted;
    }

    public function setIsTrusted(?string $isTrusted): self
    {
        $this->isTrusted = $isTrusted;
        return $this;
    }

}
