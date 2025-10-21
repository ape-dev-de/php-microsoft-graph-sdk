<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedDeviceMobileAppConfigurationAssignment
 */
class ManagedDeviceMobileAppConfigurationAssignment
{
    /**
     * Contains the properties used to assign an MDM app configuration to a group.
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
