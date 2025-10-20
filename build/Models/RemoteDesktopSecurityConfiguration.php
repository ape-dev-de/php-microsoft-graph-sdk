<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RemoteDesktopSecurityConfiguration
 */
class RemoteDesktopSecurityConfiguration
{
    /**
     * Determines if Microsoft Entra ID RDS authentication protocol for RDP is enabled.
     */
    private ?bool $isRemoteDesktopProtocolEnabled;

    /**
     * The collection of target device groups that are associated with the RDS security configuration that will be enabled for SSO when a client connects to the target device over RDP using the new Microsoft Entra ID RDS authentication protocol.
     */
    private ?string $targetDeviceGroups;

    public function getIsRemoteDesktopProtocolEnabled(): ?bool
    {
        return $this->isRemoteDesktopProtocolEnabled;
    }

    public function setIsRemoteDesktopProtocolEnabled(?bool $isRemoteDesktopProtocolEnabled): self
    {
        $this->isRemoteDesktopProtocolEnabled = $isRemoteDesktopProtocolEnabled;
        return $this;
    }

    public function getTargetDeviceGroups(): ?string
    {
        return $this->targetDeviceGroups;
    }

    public function setTargetDeviceGroups(?string $targetDeviceGroups): self
    {
        $this->targetDeviceGroups = $targetDeviceGroups;
        return $this;
    }

}
