<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityContainer
 */
class IdentityContainer
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents entry point for API connectors.
     * @var IdentityApiConnector[]
     */
    public array $apiConnectors = [];

    /** 
     * Represents listeners for custom authentication extension events in Azure AD for workforce and customers.
     * @var AuthenticationEventListener[]
     */
    public array $authenticationEventListeners = [];

    /** 
     * Represents the entry point for self-service sign-up and sign-in user flows in both Microsoft Entra workforce and external tenants.
     * @var AuthenticationEventsFlow[]
     */
    public array $authenticationEventsFlows = [];

    /** 
     * Represents entry point for B2X/self-service sign-up identity userflows.
     * @var B2xIdentityUserFlow[]
     */
    public array $b2xUserFlows = [];

    /** 
     * the entry point for the Conditional Access (CA) object model.
     * @var ConditionalAccessRoot|\stdClass|null
     */
    public mixed $conditionalAccess = null;

    /** 
     * Represents custom extensions to authentication flows in Azure AD for workforce and customers.
     * @var CustomAuthenticationExtension[]
     */
    public array $customAuthenticationExtensions = [];

    /** 
     * 
     * @var IdentityProviderBase[]
     */
    public array $identityProviders = [];

    /** 
     * Represents entry point for identity userflow attributes.
     * @var IdentityUserFlowAttribute[]
     */
    public array $userFlowAttributes = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['apiConnectors'])) {
            $this->apiConnectors = $data['apiConnectors'];
        }
        if (isset($data['authenticationEventListeners'])) {
            $this->authenticationEventListeners = $data['authenticationEventListeners'];
        }
        if (isset($data['authenticationEventsFlows'])) {
            $this->authenticationEventsFlows = $data['authenticationEventsFlows'];
        }
        if (isset($data['b2xUserFlows'])) {
            $this->b2xUserFlows = $data['b2xUserFlows'];
        }
        if (isset($data['conditionalAccess'])) {
            $this->conditionalAccess = $data['conditionalAccess'];
        }
        if (isset($data['customAuthenticationExtensions'])) {
            $this->customAuthenticationExtensions = $data['customAuthenticationExtensions'];
        }
        if (isset($data['identityProviders'])) {
            $this->identityProviders = $data['identityProviders'];
        }
        if (isset($data['userFlowAttributes'])) {
            $this->userFlowAttributes = $data['userFlowAttributes'];
        }
    }
}
