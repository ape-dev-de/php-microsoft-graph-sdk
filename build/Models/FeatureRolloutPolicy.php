<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FeatureRolloutPolicy
 */
class FeatureRolloutPolicy
{
    /**
     * A description for this feature rollout policy.
     */
    private ?string $description;

    /**
     * The display name for this  feature rollout policy.
     */
    private ?string $displayName;

    /**
     */
    private ?string $feature;

    /**
     * Indicates whether this feature rollout policy should be applied to the entire organization.
     */
    private ?bool $isAppliedToOrganization;

    /**
     * Indicates whether the feature rollout is enabled.
     */
    private ?bool $isEnabled;

    /**
     * Nullable. Specifies a list of directoryObject resources that feature is enabled for.
     * @var string[]
     */
    private array $appliesTo = [];


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
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

    public function getFeature(): ?string
    {
        return $this->feature;
    }

    public function setFeature(?string $feature): self
    {
        $this->feature = $feature;
        return $this;
    }

    public function getIsAppliedToOrganization(): ?bool
    {
        return $this->isAppliedToOrganization;
    }

    public function setIsAppliedToOrganization(?bool $isAppliedToOrganization): self
    {
        $this->isAppliedToOrganization = $isAppliedToOrganization;
        return $this;
    }

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
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
