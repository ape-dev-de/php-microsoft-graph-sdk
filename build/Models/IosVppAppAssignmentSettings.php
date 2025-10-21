<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosVppAppAssignmentSettings
 */
class IosVppAppAssignmentSettings
{
    /**
     * Whether or not to use device licensing.
     */
    private ?bool $useDeviceLicensing;

    /**
     * Contains properties used to assign an iOS VPP mobile app to a group.
     */
    private ?string $vpnConfigurationId;


    public function getUseDeviceLicensing(): ?bool
    {
        return $this->useDeviceLicensing;
    }

    public function setUseDeviceLicensing(?bool $useDeviceLicensing): self
    {
        $this->useDeviceLicensing = $useDeviceLicensing;
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
