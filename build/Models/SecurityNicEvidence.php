<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityNicEvidence
 */
class SecurityNicEvidence
{
    /**
     * The current IP address of the NIC.
     */
    private ?string $ipAddress;

    /**
     * The MAC address of the NIC.
     */
    private ?string $macAddress;

    /**
     * The current virtual local area networks of the NIC.
     */
    private ?string $vlans;

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    public function getMacAddress(): ?string
    {
        return $this->macAddress;
    }

    public function setMacAddress(?string $macAddress): self
    {
        $this->macAddress = $macAddress;
        return $this;
    }

    public function getVlans(): ?string
    {
        return $this->vlans;
    }

    public function setVlans(?string $vlans): self
    {
        $this->vlans = $vlans;
        return $this;
    }

}
