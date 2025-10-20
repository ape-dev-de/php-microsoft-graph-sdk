<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceConfigurationAssignment
 */
class DeviceConfigurationAssignment
{
    /**
     * The device configuration assignment entity assigns an AAD group to a specific device configuration.
     */
    private ?string $target;

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(?string $target): self
    {
        $this->target = $target;
        return $this;
    }

}
