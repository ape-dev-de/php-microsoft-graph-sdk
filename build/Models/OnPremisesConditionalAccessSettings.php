<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesConditionalAccessSettings
 */
class OnPremisesConditionalAccessSettings
{
    /**
     * Indicates if on premises conditional access is enabled for this organization
     */
    private ?bool $enabled;

    /**
     * User groups that will be exempt by on premises conditional access. All users in these groups will be exempt from the conditional access policy.
     */
    private ?string $excludedGroups;

    /**
     * User groups that will be targeted by on premises conditional access. All users in these groups will be required to have mobile device managed and compliant for mail access.
     */
    private ?string $includedGroups;

    /**
     * Singleton entity which represents the Exchange OnPremises Conditional Access Settings for a tenant.
     */
    private ?string $overrideDefaultRule;

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;
        return $this;
    }

    public function getExcludedGroups(): ?string
    {
        return $this->excludedGroups;
    }

    public function setExcludedGroups(?string $excludedGroups): self
    {
        $this->excludedGroups = $excludedGroups;
        return $this;
    }

    public function getIncludedGroups(): ?string
    {
        return $this->includedGroups;
    }

    public function setIncludedGroups(?string $includedGroups): self
    {
        $this->includedGroups = $includedGroups;
        return $this;
    }

    public function getOverrideDefaultRule(): ?string
    {
        return $this->overrideDefaultRule;
    }

    public function setOverrideDefaultRule(?string $overrideDefaultRule): self
    {
        $this->overrideDefaultRule = $overrideDefaultRule;
        return $this;
    }

}
