<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppManagementPolicy
 */
class AppManagementPolicy
{
    /**
     * Denotes whether the policy is enabled.
     */
    private ?bool $isEnabled;

    /**
     * Restrictions that apply to an application or service principal object.
     */
    private ?string $restrictions;

    /**
     * Collection of applications and service principals to which the policy is applied.
     */
    private ?string $appliesTo;

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

    public function getRestrictions(): ?string
    {
        return $this->restrictions;
    }

    public function setRestrictions(?string $restrictions): self
    {
        $this->restrictions = $restrictions;
        return $this;
    }

    public function getAppliesTo(): ?string
    {
        return $this->appliesTo;
    }

    public function setAppliesTo(?string $appliesTo): self
    {
        $this->appliesTo = $appliesTo;
        return $this;
    }

}
