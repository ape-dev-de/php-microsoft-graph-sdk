<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedApp
 */
class ManagedApp
{
    /**
     */
    private ?string $appAvailability;

    /**
     * Abstract class that contains properties and inherited properties for apps that you can manage with an Intune app protection policy.
     */
    private ?string $version;

    public function getAppAvailability(): ?string
    {
        return $this->appAvailability;
    }

    public function setAppAvailability(?string $appAvailability): self
    {
        $this->appAvailability = $appAvailability;
        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }

}
