<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * HostSecurityState
 */
class HostSecurityState
{
    /**
     * Host FQDN (Fully Qualified Domain Name) (for example, machine.company.com).
     */
    private ?string $fqdn;

    /**
     */
    private ?bool $isAzureAdJoined;

    /**
     */
    private ?bool $isAzureAdRegistered;

    /**
     * True if the host is domain joined to an on-premises Active Directory domain.
     */
    private ?bool $isHybridAzureDomainJoined;

    /**
     * The local host name, without the DNS domain name.
     */
    private ?string $netBiosName;

    /**
     * Host Operating System. (For example, Windows 10, macOS, RHEL, etc.).
     */
    private ?string $os;

    /**
     * Private (not routable) IPv4 or IPv6 address (see RFC 1918) at the time of the alert.
     */
    private ?string $privateIpAddress;

    /**
     * Publicly routable IPv4 or IPv6 address (see RFC 1918) at time of the alert.
     */
    private ?string $publicIpAddress;

    /**
     * Provider-generated/calculated risk score of the host.  Recommended value range of 0-1, which equates to a percentage.
     */
    private ?string $riskScore;


    public function getFqdn(): ?string
    {
        return $this->fqdn;
    }

    public function setFqdn(?string $fqdn): self
    {
        $this->fqdn = $fqdn;
        return $this;
    }

    public function getIsAzureAdJoined(): ?bool
    {
        return $this->isAzureAdJoined;
    }

    public function setIsAzureAdJoined(?bool $isAzureAdJoined): self
    {
        $this->isAzureAdJoined = $isAzureAdJoined;
        return $this;
    }

    public function getIsAzureAdRegistered(): ?bool
    {
        return $this->isAzureAdRegistered;
    }

    public function setIsAzureAdRegistered(?bool $isAzureAdRegistered): self
    {
        $this->isAzureAdRegistered = $isAzureAdRegistered;
        return $this;
    }

    public function getIsHybridAzureDomainJoined(): ?bool
    {
        return $this->isHybridAzureDomainJoined;
    }

    public function setIsHybridAzureDomainJoined(?bool $isHybridAzureDomainJoined): self
    {
        $this->isHybridAzureDomainJoined = $isHybridAzureDomainJoined;
        return $this;
    }

    public function getNetBiosName(): ?string
    {
        return $this->netBiosName;
    }

    public function setNetBiosName(?string $netBiosName): self
    {
        $this->netBiosName = $netBiosName;
        return $this;
    }

    public function getOs(): ?string
    {
        return $this->os;
    }

    public function setOs(?string $os): self
    {
        $this->os = $os;
        return $this;
    }

    public function getPrivateIpAddress(): ?string
    {
        return $this->privateIpAddress;
    }

    public function setPrivateIpAddress(?string $privateIpAddress): self
    {
        $this->privateIpAddress = $privateIpAddress;
        return $this;
    }

    public function getPublicIpAddress(): ?string
    {
        return $this->publicIpAddress;
    }

    public function setPublicIpAddress(?string $publicIpAddress): self
    {
        $this->publicIpAddress = $publicIpAddress;
        return $this;
    }

    public function getRiskScore(): ?string
    {
        return $this->riskScore;
    }

    public function setRiskScore(?string $riskScore): self
    {
        $this->riskScore = $riskScore;
        return $this;
    }

}
