<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VppLicensingType
 */
class VppLicensingType
{
    /**
     * Whether the program supports the device licensing type.
     */
    private ?bool $supportsDeviceLicensing;

    /**
     * Contains properties for iOS Volume-Purchased Program (Vpp) Licensing Type.
     */
    private ?string $supportsUserLicensing;

    public function getSupportsDeviceLicensing(): ?bool
    {
        return $this->supportsDeviceLicensing;
    }

    public function setSupportsDeviceLicensing(?bool $supportsDeviceLicensing): self
    {
        $this->supportsDeviceLicensing = $supportsDeviceLicensing;
        return $this;
    }

    public function getSupportsUserLicensing(): ?string
    {
        return $this->supportsUserLicensing;
    }

    public function setSupportsUserLicensing(?string $supportsUserLicensing): self
    {
        $this->supportsUserLicensing = $supportsUserLicensing;
        return $this;
    }

}
