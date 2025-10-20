<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsLicensingDetails
 */
class TeamsLicensingDetails
{
    /**
     * Indicates whether the user has a valid license to use Microsoft Teams.
     */
    private ?string $hasTeamsLicense;

    public function getHasTeamsLicense(): ?string
    {
        return $this->hasTeamsLicense;
    }

    public function setHasTeamsLicense(?string $hasTeamsLicense): self
    {
        $this->hasTeamsLicense = $hasTeamsLicense;
        return $this;
    }

}
