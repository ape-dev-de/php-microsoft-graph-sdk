<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProxiedDomain
 */
class ProxiedDomain
{
    /**
     * The IP address or FQDN
     */
    private ?string $ipAddressOrFQDN;

    /**
     * Proxied Domain
     */
    private ?string $proxy;

    public function getIpAddressOrFQDN(): ?string
    {
        return $this->ipAddressOrFQDN;
    }

    public function setIpAddressOrFQDN(?string $ipAddressOrFQDN): self
    {
        $this->ipAddressOrFQDN = $ipAddressOrFQDN;
        return $this;
    }

    public function getProxy(): ?string
    {
        return $this->proxy;
    }

    public function setProxy(?string $proxy): self
    {
        $this->proxy = $proxy;
        return $this;
    }

}
