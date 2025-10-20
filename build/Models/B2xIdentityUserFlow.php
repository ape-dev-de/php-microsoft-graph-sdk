<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * B2xIdentityUserFlow
 */
class B2xIdentityUserFlow
{
    /**
     * Configuration for enabling an API connector for use as part of the self-service sign-up user flow. You can only obtain the value of this object using Get userFlowApiConnectorConfiguration.
     */
    private ?string $apiConnectorConfiguration;

    /**
     * The identity providers included in the user flow.
     */
    private array $identityProviders = [];

    /**
     * The languages supported for customization within the user flow. Language customization is enabled by default in self-service sign-up user flow. You can't create custom languages in self-service sign-up user flows.
     */
    private array $languages = [];

    /**
     * The user attribute assignments included in the user flow.
     */
    private array $userAttributeAssignments = [];

    /**
     */
    private ?string $userFlowIdentityProviders;

    public function getApiConnectorConfiguration(): ?string
    {
        return $this->apiConnectorConfiguration;
    }

    public function setApiConnectorConfiguration(?string $apiConnectorConfiguration): self
    {
        $this->apiConnectorConfiguration = $apiConnectorConfiguration;
        return $this;
    }

    public function getIdentityProviders(): array
    {
        return $this->identityProviders;
    }

    public function setIdentityProviders(array $identityProviders): self
    {
        $this->identityProviders = $identityProviders;
        return $this;
    }

    public function getLanguages(): array
    {
        return $this->languages;
    }

    public function setLanguages(array $languages): self
    {
        $this->languages = $languages;
        return $this;
    }

    public function getUserAttributeAssignments(): array
    {
        return $this->userAttributeAssignments;
    }

    public function setUserAttributeAssignments(array $userAttributeAssignments): self
    {
        $this->userAttributeAssignments = $userAttributeAssignments;
        return $this;
    }

    public function getUserFlowIdentityProviders(): ?string
    {
        return $this->userFlowIdentityProviders;
    }

    public function setUserFlowIdentityProviders(?string $userFlowIdentityProviders): self
    {
        $this->userFlowIdentityProviders = $userFlowIdentityProviders;
        return $this;
    }

}
