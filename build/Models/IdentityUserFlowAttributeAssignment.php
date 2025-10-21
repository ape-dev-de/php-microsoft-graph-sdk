<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityUserFlowAttributeAssignment
 */
class IdentityUserFlowAttributeAssignment
{
    /**
     * The display name of the identityUserFlowAttribute within a user flow.
     */
    private ?string $displayName;

    /**
     * Determines whether the identityUserFlowAttribute is optional. true means the user doesn't have to provide a value. false means the user can't complete sign-up without providing a value.
     */
    private ?bool $isOptional;

    /**
     * Determines whether the identityUserFlowAttribute requires verification, and is only used for verifying the user''s phone number or email address.
     */
    private ?bool $requiresVerification;

    /**
     * The input options for the user flow attribute. Only applicable when the userInputType is radioSingleSelect, dropdownSingleSelect, or checkboxMultiSelect.
     */
    private array $userAttributeValues = [];

    /**
     */
    private ?string $userInputType;

    /**
     * The user attribute that you want to add to your user flow.
     */
    private ?string $userAttribute;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getIsOptional(): ?bool
    {
        return $this->isOptional;
    }

    public function setIsOptional(?bool $isOptional): self
    {
        $this->isOptional = $isOptional;
        return $this;
    }

    public function getRequiresVerification(): ?bool
    {
        return $this->requiresVerification;
    }

    public function setRequiresVerification(?bool $requiresVerification): self
    {
        $this->requiresVerification = $requiresVerification;
        return $this;
    }

    public function getUserAttributeValues(): array
    {
        return $this->userAttributeValues;
    }

    public function setUserAttributeValues(array $userAttributeValues): self
    {
        $this->userAttributeValues = $userAttributeValues;
        return $this;
    }

    public function getUserInputType(): ?string
    {
        return $this->userInputType;
    }

    public function setUserInputType(?string $userInputType): self
    {
        $this->userInputType = $userInputType;
        return $this;
    }

    public function getUserAttribute(): ?string
    {
        return $this->userAttribute;
    }

    public function setUserAttribute(?string $userAttribute): self
    {
        $this->userAttribute = $userAttribute;
        return $this;
    }

}
