<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApplicationContext
 */
class ApplicationContext
{
    /**
     * Collection of appId values for the applications.
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
