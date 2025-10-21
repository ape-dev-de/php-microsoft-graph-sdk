<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessDevices
 */
class ConditionalAccessDevices
{
    /**
     * Filter that defines the dynamic-device-syntax rule to include/exclude devices. A filter can use device properties (such as extension attributes) to include/exclude them.
     */
    private ?string $deviceFilter;


    public function getDeviceFilter(): ?string
    {
        return $this->deviceFilter;
    }

    public function setDeviceFilter(?string $deviceFilter): self
    {
        $this->deviceFilter = $deviceFilter;
        return $this;
    }

}
