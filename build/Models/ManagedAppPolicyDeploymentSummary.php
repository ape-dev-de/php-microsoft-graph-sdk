<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppPolicyDeploymentSummary
 */
class ManagedAppPolicyDeploymentSummary
{
    /**
     * Not yet documented
     */
    private ?float $configurationDeployedUserCount;

    /**
     * Not yet documented
     */
    private array $configurationDeploymentSummaryPerApp = [];

    /**
     * Not yet documented
     */
    private ?string $displayName;

    /**
     * Not yet documented
     */
    private ?\DateTimeInterface $lastRefreshTime;

    /**
     * The ManagedAppEntity is the base entity type for all other entity types under app management workflow.
     */
    private ?string $version;


    public function getConfigurationDeployedUserCount(): ?float
    {
        return $this->configurationDeployedUserCount;
    }

    public function setConfigurationDeployedUserCount(?float $configurationDeployedUserCount): self
    {
        $this->configurationDeployedUserCount = $configurationDeployedUserCount;
        return $this;
    }

    public function getConfigurationDeploymentSummaryPerApp(): array
    {
        return $this->configurationDeploymentSummaryPerApp;
    }

    public function setConfigurationDeploymentSummaryPerApp(array $configurationDeploymentSummaryPerApp): self
    {
        $this->configurationDeploymentSummaryPerApp = $configurationDeploymentSummaryPerApp;
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

    public function getLastRefreshTime(): ?\DateTimeInterface
    {
        return $this->lastRefreshTime;
    }

    public function setLastRefreshTime(?\DateTimeInterface $lastRefreshTime): self
    {
        $this->lastRefreshTime = $lastRefreshTime;
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

}
