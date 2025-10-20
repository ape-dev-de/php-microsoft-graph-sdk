<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProtectedApplicationMetadata
 */
class ProtectedApplicationMetadata
{
    /**
     * The client (application) ID of the Microsoft Entra application. Required.
     */
    private ?string $applicationLocation;

    public function getApplicationLocation(): ?string
    {
        return $this->applicationLocation;
    }

    public function setApplicationLocation(?string $applicationLocation): self
    {
        $this->applicationLocation = $applicationLocation;
        return $this;
    }

}
