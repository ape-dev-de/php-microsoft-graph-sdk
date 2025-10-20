<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InvitationRedemptionIdentityProviderConfiguration resources
 *
 * Available select fields:
 * - fallbackIdentityProvider
 * - primaryIdentityProviderPrecedenceOrder
 */
class InvitationRedemptionIdentityProviderConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_FALLBACK_IDENTITY_PROVIDER = 'fallbackIdentityProvider';
    public const FIELD_PRIMARY_IDENTITY_PROVIDER_PRECEDENCE_ORDER = 'primaryIdentityProviderPrecedenceOrder';

    /**
     * Select specific InvitationRedemptionIdentityProviderConfiguration properties
     * 
     * @param array<string> $select Use InvitationRedemptionIdentityProviderConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
