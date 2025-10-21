<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosDeviceType
 */
class IosDeviceType
{
    /**
     * Whether the app should run on iPads.
     */
    private ?bool $iPad;

    /**
     * Contains properties of the possible iOS device types the mobile app can run on.
     */
    private ?string $iPhoneAndIPod;


    public function getIPad(): ?bool
    {
        return $this->iPad;
    }

    public function setIPad(?bool $iPad): self
    {
        $this->iPad = $iPad;
        return $this;
    }

    public function getIPhoneAndIPod(): ?string
    {
        return $this->iPhoneAndIPod;
    }

    public function setIPhoneAndIPod(?string $iPhoneAndIPod): self
    {
        $this->iPhoneAndIPod = $iPhoneAndIPod;
        return $this;
    }

}
