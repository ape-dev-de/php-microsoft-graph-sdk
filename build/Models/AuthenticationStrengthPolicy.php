<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationStrengthPolicy
 */
class AuthenticationStrengthPolicy
{
    /**
     * A collection of authentication method modes that are required be used to satify this authentication strength.
     */
    private array $allowedCombinations = [];

    /**
     * The datetime when this policy was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The human-readable description of this policy.
     */
    private ?string $description;

    /**
     * The human-readable display name of this policy. Supports $filter (eq, ne, not , and in).
     */
    private ?string $displayName;

    /**
     * The datetime when this policy was last modified.
     */
    private ?\DateTimeInterface $modifiedDateTime;

    /**
     */
    private ?string $policyType;

    /**
     */
    private ?string $requirementsSatisfied;

    /**
     * Settings that may be used to require specific types or instances of an authentication method to be used when authenticating with a specified combination of authentication methods.
     */
    private ?string $combinationConfigurations;

    public function getAllowedCombinations(): array
    {
        return $this->allowedCombinations;
    }

    public function setAllowedCombinations(array $allowedCombinations): self
    {
        $this->allowedCombinations = $allowedCombinations;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

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

    public function getModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->modifiedDateTime;
    }

    public function setModifiedDateTime(?\DateTimeInterface $modifiedDateTime): self
    {
        $this->modifiedDateTime = $modifiedDateTime;
        return $this;
    }

    public function getPolicyType(): ?string
    {
        return $this->policyType;
    }

    public function setPolicyType(?string $policyType): self
    {
        $this->policyType = $policyType;
        return $this;
    }

    public function getRequirementsSatisfied(): ?string
    {
        return $this->requirementsSatisfied;
    }

    public function setRequirementsSatisfied(?string $requirementsSatisfied): self
    {
        $this->requirementsSatisfied = $requirementsSatisfied;
        return $this;
    }

    public function getCombinationConfigurations(): ?string
    {
        return $this->combinationConfigurations;
    }

    public function setCombinationConfigurations(?string $combinationConfigurations): self
    {
        $this->combinationConfigurations = $combinationConfigurations;
        return $this;
    }

}
