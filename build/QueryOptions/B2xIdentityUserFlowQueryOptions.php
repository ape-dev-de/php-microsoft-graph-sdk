<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for B2xIdentityUserFlow resources
 *
 * Available select fields:
 * - apiConnectorConfiguration
 * - identityProviders
 * - languages
 * - userAttributeAssignments
 * - userFlowIdentityProviders
 */
class B2xIdentityUserFlowQueryOptions extends QueryOptions
{
    public const FIELD_API_CONNECTOR_CONFIGURATION = 'apiConnectorConfiguration';
    public const FIELD_IDENTITY_PROVIDERS = 'identityProviders';
    public const FIELD_LANGUAGES = 'languages';
    public const FIELD_USER_ATTRIBUTE_ASSIGNMENTS = 'userAttributeAssignments';
    public const FIELD_USER_FLOW_IDENTITY_PROVIDERS = 'userFlowIdentityProviders';

    /**
     * Select specific B2xIdentityUserFlow properties
     * 
     * @param array<string> $select Use B2xIdentityUserFlowQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
