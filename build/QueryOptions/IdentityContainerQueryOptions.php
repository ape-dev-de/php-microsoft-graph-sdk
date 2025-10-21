<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityContainer resources
 *
 * Available select fields:
 * - apiConnectors
 * - authenticationEventListeners
 * - authenticationEventsFlows
 * - b2xUserFlows
 * - conditionalAccess
 * - customAuthenticationExtensions
 * - identityProviders
 * - userFlowAttributes
 */
class IdentityContainerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityContainer
     */
    public const FIELD_API_CONNECTORS = 'apiConnectors';
    public const FIELD_AUTHENTICATION_EVENT_LISTENERS = 'authenticationEventListeners';
    public const FIELD_AUTHENTICATION_EVENTS_FLOWS = 'authenticationEventsFlows';
    public const FIELD_B2X_USER_FLOWS = 'b2xUserFlows';
    public const FIELD_CONDITIONAL_ACCESS = 'conditionalAccess';
    public const FIELD_CUSTOM_AUTHENTICATION_EXTENSIONS = 'customAuthenticationExtensions';
    public const FIELD_IDENTITY_PROVIDERS = 'identityProviders';
    public const FIELD_USER_FLOW_ATTRIBUTES = 'userFlowAttributes';

    /**
     * Select specific IdentityContainer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
