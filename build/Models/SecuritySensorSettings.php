<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySensorSettings
 */
class SecuritySensorSettings
{
    /**
     * Description of the sensor.
     */
    private ?string $description;

    /**
     * DNS names for the domain controller
     */
    private ?string $domainControllerDnsNames;

    /**
     * Indicates whether to delay updates for the sensor.
     */
    private ?bool $isDelayedDeploymentEnabled;

    /**
     */
    private ?string $networkAdapters;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDomainControllerDnsNames(): ?string
    {
        return $this->domainControllerDnsNames;
    }

    public function setDomainControllerDnsNames(?string $domainControllerDnsNames): self
    {
        $this->domainControllerDnsNames = $domainControllerDnsNames;
        return $this;
    }

    public function getIsDelayedDeploymentEnabled(): ?bool
    {
        return $this->isDelayedDeploymentEnabled;
    }

    public function setIsDelayedDeploymentEnabled(?bool $isDelayedDeploymentEnabled): self
    {
        $this->isDelayedDeploymentEnabled = $isDelayedDeploymentEnabled;
        return $this;
    }

    public function getNetworkAdapters(): ?string
    {
        return $this->networkAdapters;
    }

    public function setNetworkAdapters(?string $networkAdapters): self
    {
        $this->networkAdapters = $networkAdapters;
        return $this;
    }

}
