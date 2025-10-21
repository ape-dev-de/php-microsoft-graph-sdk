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
     * @var string[]
     */
    private array $domainControllerDnsNames = [];

    /**
     * Indicates whether to delay updates for the sensor.
     */
    private ?bool $isDelayedDeploymentEnabled;

    /**
     * @var string[]
     */
    private array $networkAdapters = [];


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getDomainControllerDnsNames(): array
    {
        return $this->domainControllerDnsNames;
    }

    /**
     * @param string[] $domainControllerDnsNames
     */
    public function setDomainControllerDnsNames(array $domainControllerDnsNames): self
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

    /**
     * @return string[]
     */
    public function getNetworkAdapters(): array
    {
        return $this->networkAdapters;
    }

    /**
     * @param string[] $networkAdapters
     */
    public function setNetworkAdapters(array $networkAdapters): self
    {
        $this->networkAdapters = $networkAdapters;
        return $this;
    }

}
