<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationConditionsApplications
 */
class AuthenticationConditionsApplications
{
    /**
     */
    private ?string $includeApplications;

    public function getIncludeApplications(): ?string
    {
        return $this->includeApplications;
    }

    public function setIncludeApplications(?string $includeApplications): self
    {
        $this->includeApplications = $includeApplications;
        return $this;
    }

}
