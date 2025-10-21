<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAutomaticRequestSettings
 */
class AccessPackageAutomaticRequestSettings
{
    /**
     * The duration for which access must be retained before the target's access is revoked once they leave the allowed target scope.
     */
    private ?string $gracePeriodBeforeAccessRemoval;

    /**
     * Indicates whether automatic assignment must be removed for targets who move out of the allowed target scope.
     */
    private ?bool $removeAccessWhenTargetLeavesAllowedTargets;

    /**
     * If set to true, automatic assignments will be created for targets in the allowed target scope.
     */
    private ?string $requestAccessForAllowedTargets;


    public function getGracePeriodBeforeAccessRemoval(): ?string
    {
        return $this->gracePeriodBeforeAccessRemoval;
    }

    public function setGracePeriodBeforeAccessRemoval(?string $gracePeriodBeforeAccessRemoval): self
    {
        $this->gracePeriodBeforeAccessRemoval = $gracePeriodBeforeAccessRemoval;
        return $this;
    }

    public function getRemoveAccessWhenTargetLeavesAllowedTargets(): ?bool
    {
        return $this->removeAccessWhenTargetLeavesAllowedTargets;
    }

    public function setRemoveAccessWhenTargetLeavesAllowedTargets(?bool $removeAccessWhenTargetLeavesAllowedTargets): self
    {
        $this->removeAccessWhenTargetLeavesAllowedTargets = $removeAccessWhenTargetLeavesAllowedTargets;
        return $this;
    }

    public function getRequestAccessForAllowedTargets(): ?string
    {
        return $this->requestAccessForAllowedTargets;
    }

    public function setRequestAccessForAllowedTargets(?string $requestAccessForAllowedTargets): self
    {
        $this->requestAccessForAllowedTargets = $requestAccessForAllowedTargets;
        return $this;
    }

}
