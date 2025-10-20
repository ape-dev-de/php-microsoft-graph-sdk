<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIdentityContainer
 */
class SecurityIdentityContainer
{
    /**
     * Represents potential issues identified by Microsoft Defender for Identity within a customer's Microsoft Defender for Identity configuration.
     */
    private array $healthIssues = [];

    /**
     * Represents a customer's Microsoft Defender for Identity sensors.
     */
    private ?string $sensors;

    public function getHealthIssues(): array
    {
        return $this->healthIssues;
    }

    public function setHealthIssues(array $healthIssues): self
    {
        $this->healthIssues = $healthIssues;
        return $this;
    }

    public function getSensors(): ?string
    {
        return $this->sensors;
    }

    public function setSensors(?string $sensors): self
    {
        $this->sensors = $sensors;
        return $this;
    }

}
