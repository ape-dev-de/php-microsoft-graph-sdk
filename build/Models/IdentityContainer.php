<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityContainer
 */
class IdentityContainer
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents entry point for API connectors. */
        public array $apiConnectors = [],
        /** Represents listeners for custom authentication extension events in Azure AD for workforce and customers. */
        public array $authenticationEventListeners = [],
        /** Represents the entry point for self-service sign-up and sign-in user flows in both Microsoft Entra workforce and external tenants. */
        public array $authenticationEventsFlows = [],
        /** Represents entry point for B2X/self-service sign-up identity userflows. */
        public array $b2xUserFlows = [],
        /** the entry point for the Conditional Access (CA) object model. */
        public ?string $conditionalAccess = null,
        /** Represents custom extensions to authentication flows in Azure AD for workforce and customers. */
        public array $customAuthenticationExtensions = [],
        /**  */
        public array $identityProviders = [],
        /** Represents entry point for identity userflow attributes. */
        public array $userFlowAttributes = []
    ) {}
}
