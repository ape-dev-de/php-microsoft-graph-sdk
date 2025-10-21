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
     * @var string[]
     */
    private array $appliesTo = [];


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

    /**
     * @return string[]
     */
    public function getAppliesTo(): array
    {
        return $this->appliesTo;
    }

    /**
     * @param string[] $appliesTo
     */
    public function setAppliesTo(array $appliesTo): self
    {
        $this->appliesTo = $appliesTo;
        return $this;
    }

}
