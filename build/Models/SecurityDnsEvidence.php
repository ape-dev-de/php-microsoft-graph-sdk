<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDnsEvidence
 */
class SecurityDnsEvidence
{
    /**
     */
    private ?string $dnsServerIp;

    /**
     */
    private ?string $domainName;

    /**
     */
    private ?string $hostIpAddress;

    /**
     */
    private ?string $ipAddresses;

    public function getDnsServerIp(): ?string
    {
        return $this->dnsServerIp;
    }

    public function setDnsServerIp(?string $dnsServerIp): self
    {
        $this->dnsServerIp = $dnsServerIp;
        return $this;
    }

    public function getDomainName(): ?string
    {
        return $this->domainName;
    }

    public function setDomainName(?string $domainName): self
    {
        $this->domainName = $domainName;
        return $this;
    }

    public function getHostIpAddress(): ?string
    {
        return $this->hostIpAddress;
    }

    public function setHostIpAddress(?string $hostIpAddress): self
    {
        $this->hostIpAddress = $hostIpAddress;
        return $this;
    }

    public function getIpAddresses(): ?string
    {
        return $this->ipAddresses;
    }

    public function setIpAddresses(?string $ipAddresses): self
    {
        $this->ipAddresses = $ipAddresses;
        return $this;
    }

}
