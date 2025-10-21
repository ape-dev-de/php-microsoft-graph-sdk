<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppStatus
 */
class ManagedAppStatus
{
    /**
     * Friendly name of the status report.
     */
    private ?string $displayName;

    /**
     * Represents app protection and configuration status for the organization.
     */
    private ?string $version;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
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
