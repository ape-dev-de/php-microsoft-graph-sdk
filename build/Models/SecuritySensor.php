<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySensor
 */
class SecuritySensor
{
    /**
     * The date and time when the sensor was generated. The Timestamp represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     */
    private ?string $deploymentStatus;

    /**
     * The display name of the sensor.
     */
    private ?string $displayName;

    /**
     * The fully qualified domain name of the sensor.
     */
    private ?string $domainName;

    /**
     */
    private ?string $healthStatus;

    /**
     * This field displays the count of health issues related to this sensor.
     */
    private ?float $openHealthIssuesCount;

    /**
     */
    private ?string $sensorType;

    /**
     */
    private ?string $settings;

    /**
     * The version of the sensor.
     */
    private ?string $version;

    /**
     * Represents potential issues within a customer's Microsoft Defender for Identity configuration that Microsoft Defender for Identity identified related to the sensor.
     * @var string[]
     */
    private array $healthIssues = [];


    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDeploymentStatus(): ?string
    {
        return $this->deploymentStatus;
    }

    public function setDeploymentStatus(?string $deploymentStatus): self
    {
        $this->deploymentStatus = $deploymentStatus;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getDomainName(): ?string
    {
        return $this->domainName;
    }

    public function setDomainName(?string $domainName): self
    {
        $this->domainName = $domainName;
        return $this;
    }

    public function getHealthStatus(): ?string
    {
        return $this->healthStatus;
    }

    public function setHealthStatus(?string $healthStatus): self
    {
        $this->healthStatus = $healthStatus;
        return $this;
    }

    public function getOpenHealthIssuesCount(): ?float
    {
        return $this->openHealthIssuesCount;
    }

    public function setOpenHealthIssuesCount(?float $openHealthIssuesCount): self
    {
        $this->openHealthIssuesCount = $openHealthIssuesCount;
        return $this;
    }

    public function getSensorType(): ?string
    {
        return $this->sensorType;
    }

    public function setSensorType(?string $sensorType): self
    {
        $this->sensorType = $sensorType;
        return $this;
    }

    public function getSettings(): ?string
    {
        return $this->settings;
    }

    public function setSettings(?string $settings): self
    {
        $this->settings = $settings;
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

    /**
     * @return string[]
     */
    public function getHealthIssues(): array
    {
        return $this->healthIssues;
    }

    /**
     * @param string[] $healthIssues
     */
    public function setHealthIssues(array $healthIssues): self
    {
        $this->healthIssues = $healthIssues;
        return $this;
    }

}
