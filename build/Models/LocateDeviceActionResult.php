<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LocateDeviceActionResult
 */
class LocateDeviceActionResult
{
    /**
     * Locate device action result
     */
    private ?string $deviceLocation;


    public function getDeviceLocation(): ?string
    {
        return $this->deviceLocation;
    }

    public function setDeviceLocation(?string $deviceLocation): self
    {
        $this->deviceLocation = $deviceLocation;
        return $this;
    }

}
