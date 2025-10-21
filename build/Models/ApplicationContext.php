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
     * @var string[]
     */
    private array $includeApplications = [];


    /**
     * @return string[]
     */
    public function getIncludeApplications(): array
    {
        return $this->includeApplications;
    }

    /**
     * @param string[] $includeApplications
     */
    public function setIncludeApplications(array $includeApplications): self
    {
        $this->includeApplications = $includeApplications;
        return $this;
    }

}
