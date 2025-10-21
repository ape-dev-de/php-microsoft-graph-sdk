<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityContainer
 */
class IdentityContainer
{
    /**
     * Represents entry point for API connectors.
     */
    private array $apiConnectors = [];

    /**
     * Represents listeners for custom authentication extension events in Azure AD for workforce and customers.
     */
    private array $authenticationEventListeners = [];

    /**
     * Represents the entry point for self-service sign-up and sign-in user flows in both Microsoft Entra workforce and external tenants.
     */
    private array $authenticationEventsFlows = [];

    /**
     * Represents entry point for B2X/self-service sign-up identity userflows.
     */
    private array $b2xUserFlows = [];

    /**
     * the entry point for the Conditional Access (CA) object model.
     */
    private ?string $conditionalAccess;

    /**
     * Represents custom extensions to authentication flows in Azure AD for workforce and customers.
     */
    private array $customAuthenticationExtensions = [];

    /**
     */
    private array $identityProviders = [];

    /**
     * Represents entry point for identity userflow attributes.
     * @var string[]
     */
    private array $userFlowAttributes = [];


    public function getApiConnectors(): array
    {
        return $this->apiConnectors;
    }

    public function setApiConnectors(array $apiConnectors): self
    {
        $this->apiConnectors = $apiConnectors;
        return $this;
    }

    public function getAuthenticationEventListeners(): array
    {
        return $this->authenticationEventListeners;
    }

    public function setAuthenticationEventListeners(array $authenticationEventListeners): self
    {
        $this->authenticationEventListeners = $authenticationEventListeners;
        return $this;
    }

    public function getAuthenticationEventsFlows(): array
    {
        return $this->authenticationEventsFlows;
    }

    public function setAuthenticationEventsFlows(array $authenticationEventsFlows): self
    {
        $this->authenticationEventsFlows = $authenticationEventsFlows;
        return $this;
    }

    public function getB2xUserFlows(): array
    {
        return $this->b2xUserFlows;
    }

    public function setB2xUserFlows(array $b2xUserFlows): self
    {
        $this->b2xUserFlows = $b2xUserFlows;
        return $this;
    }

    public function getConditionalAccess(): ?string
    {
        return $this->conditionalAccess;
    }

    public function setConditionalAccess(?string $conditionalAccess): self
    {
        $this->conditionalAccess = $conditionalAccess;
        return $this;
    }

    public function getCustomAuthenticationExtensions(): array
    {
        return $this->customAuthenticationExtensions;
    }

    public function setCustomAuthenticationExtensions(array $customAuthenticationExtensions): self
    {
        $this->customAuthenticationExtensions = $customAuthenticationExtensions;
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

    /**
     * @return string[]
     */
    public function getUserFlowAttributes(): array
    {
        return $this->userFlowAttributes;
    }

    /**
     * @param string[] $userFlowAttributes
     */
    public function setUserFlowAttributes(array $userFlowAttributes): self
    {
        $this->userFlowAttributes = $userFlowAttributes;
        return $this;
    }

}
