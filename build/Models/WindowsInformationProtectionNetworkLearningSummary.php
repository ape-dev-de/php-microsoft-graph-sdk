<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionNetworkLearningSummary
 */
class WindowsInformationProtectionNetworkLearningSummary
{
    /**
     * Device Count
     */
    private ?float $deviceCount;

    /**
     * Windows Information Protection Network learning Summary entity.
     */
    private ?string $url;

    public function getDeviceCount(): ?float
    {
        return $this->deviceCount;
    }

    public function setDeviceCount(?float $deviceCount): self
    {
        $this->deviceCount = $deviceCount;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

}
