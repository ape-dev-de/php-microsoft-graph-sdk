<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DefaultInvitationRedemptionIdentityProviderConfiguration resources
 *
 * Available select fields:
 */
class DefaultInvitationRedemptionIdentityProviderConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DefaultInvitationRedemptionIdentityProviderConfiguration
     */

    /**
     * Select specific DefaultInvitationRedemptionIdentityProviderConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
