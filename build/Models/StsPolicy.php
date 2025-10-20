<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StsPolicy
 */
class StsPolicy
{
    /**
     * A string collection containing a JSON string that defines the rules and settings for a policy. The syntax for the definition differs for each derived policy type. Required.
     */
    private ?string $definition;

    /**
     * If set to true, activates this policy. There can be many policies for the same policy type, but only one can be activated as the organization default. Optional, default value is false.
     */
    private ?bool $isOrganizationDefault;

    /**
     */
    private ?string $appliesTo;

    public function getDefinition(): ?string
    {
        return $this->definition;
    }

    public function setDefinition(?string $definition): self
    {
        $this->definition = $definition;
        return $this;
    }

    public function getIsOrganizationDefault(): ?bool
    {
        return $this->isOrganizationDefault;
    }

    public function setIsOrganizationDefault(?bool $isOrganizationDefault): self
    {
        $this->isOrganizationDefault = $isOrganizationDefault;
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
