<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationConditions
 */
class AuthenticationConditions
{
    /**
     * Applications which trigger a custom authentication extension.
     */
    private ?string $applications;


    public function getApplications(): ?string
    {
        return $this->applications;
    }

    public function setApplications(?string $applications): self
    {
        $this->applications = $applications;
        return $this;
    }

}
