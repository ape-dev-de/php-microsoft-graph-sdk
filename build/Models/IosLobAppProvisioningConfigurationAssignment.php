<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosLobAppProvisioningConfigurationAssignment
 */
class IosLobAppProvisioningConfigurationAssignment
{
    /**
     * A class containing the properties used for Group Assignment of an iOS LOB App Provisioning and Configuration.
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
