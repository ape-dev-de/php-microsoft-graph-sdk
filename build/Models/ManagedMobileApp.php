<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedMobileApp
 */
class ManagedMobileApp
{
    /**
     * The identifier for an app with it's operating system type.
     */
    private ?string $mobileAppIdentifier;

    /**
     * The identifier for the deployment an app.
     */
    private ?string $version;


    public function getMobileAppIdentifier(): ?string
    {
        return $this->mobileAppIdentifier;
    }

    public function setMobileAppIdentifier(?string $mobileAppIdentifier): self
    {
        $this->mobileAppIdentifier = $mobileAppIdentifier;
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
