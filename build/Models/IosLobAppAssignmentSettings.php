<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosLobAppAssignmentSettings
 */
class IosLobAppAssignmentSettings
{
    /**
     * When TRUE, indicates that the app can be uninstalled by the user. When FALSE, indicates that the app cannot be uninstalled by the user. By default, this property is set to null which internally is treated as TRUE.
     */
    private ?bool $isRemovable;

    /**
     * When TRUE, indicates that the app should be uninstalled when the device is removed from Intune. When FALSE, indicates that the app will not be uninstalled when the device is removed from Intune. By default, property is set to null which internally is treated as TRUE.
     */
    private ?bool $uninstallOnDeviceRemoval;

    /**
     * Contains properties used to assign an iOS LOB mobile app to a group.
     */
    private ?string $vpnConfigurationId;


    public function getIsRemovable(): ?bool
    {
        return $this->isRemovable;
    }

    public function setIsRemovable(?bool $isRemovable): self
    {
        $this->isRemovable = $isRemovable;
        return $this;
    }

    public function getUninstallOnDeviceRemoval(): ?bool
    {
        return $this->uninstallOnDeviceRemoval;
    }

    public function setUninstallOnDeviceRemoval(?bool $uninstallOnDeviceRemoval): self
    {
        $this->uninstallOnDeviceRemoval = $uninstallOnDeviceRemoval;
        return $this;
    }

    public function getVpnConfigurationId(): ?string
    {
        return $this->vpnConfigurationId;
    }

    public function setVpnConfigurationId(?string $vpnConfigurationId): self
    {
        $this->vpnConfigurationId = $vpnConfigurationId;
        return $this;
    }

}
