<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserDataSecurityAndGovernance
 */
class UserDataSecurityAndGovernance
{
    /**
     * Container for activity logs (content processing and audit) related to this user. ContainsTarget: true.
     */
    private ?string $activities;

    /**
     */
    private ?string $protectionScopes;

    public function getActivities(): ?string
    {
        return $this->activities;
    }

    public function setActivities(?string $activities): self
    {
        $this->activities = $activities;
        return $this;
    }

    public function getProtectionScopes(): ?string
    {
        return $this->protectionScopes;
    }

    public function setProtectionScopes(?string $protectionScopes): self
    {
        $this->protectionScopes = $protectionScopes;
        return $this;
    }

}
