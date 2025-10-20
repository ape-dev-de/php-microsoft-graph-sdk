<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppPolicyDeploymentSummaryPerApp
 */
class ManagedAppPolicyDeploymentSummaryPerApp
{
    /**
     * Number of users the policy is applied.
     */
    private ?float $configurationAppliedUserCount;

    /**
     * Represents policy deployment summary per app.
     */
    private ?string $mobileAppIdentifier;

    public function getConfigurationAppliedUserCount(): ?float
    {
        return $this->configurationAppliedUserCount;
    }

    public function setConfigurationAppliedUserCount(?float $configurationAppliedUserCount): self
    {
        $this->configurationAppliedUserCount = $configurationAppliedUserCount;
        return $this;
    }

    public function getMobileAppIdentifier(): ?string
    {
        return $this->mobileAppIdentifier;
    }

    public function setMobileAppIdentifier(?string $mobileAppIdentifier): self
    {
        $this->mobileAppIdentifier = $mobileAppIdentifier;
        return $this;
    }

}
