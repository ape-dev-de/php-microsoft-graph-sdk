<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10NetworkProxyServer
 */
class Windows10NetworkProxyServer
{
    /**
     * Address to the proxy server. Specify an address in the format ['':'']
     */
    private ?string $address;

    /**
     * Addresses that should not use the proxy server. The system will not use the proxy server for addresses beginning with what is specified in this node.
     */
    private ?string $exceptions;

    /**
     * Network Proxy Server Policy.
     */
    private ?string $useForLocalAddresses;

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function getExceptions(): ?string
    {
        return $this->exceptions;
    }

    public function setExceptions(?string $exceptions): self
    {
        $this->exceptions = $exceptions;
        return $this;
    }

    public function getUseForLocalAddresses(): ?string
    {
        return $this->useForLocalAddresses;
    }

    public function setUseForLocalAddresses(?string $useForLocalAddresses): self
    {
        $this->useForLocalAddresses = $useForLocalAddresses;
        return $this;
    }

}
